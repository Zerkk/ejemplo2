<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Form;
use Validator;
use Response;
use Lang;
use Auth;
use Illuminate\Support\Facades\Session;
use Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Maatwebsite\Excel\Collections\CellCollection;
use Maatwebsite\Excel\Facades\Excel;

class PromedioController extends Controller
{
    public function index(){
        return view('promedio');
    }

    public function store(Request $request) {


        $file = $request->file('archivo');
        $numIntervalos = $request['intervalos'];
//dd($file);
        $result = Excel::load($file, function ($reader) {
//            $results = $reader->all();
//            dd($results->toArray());

        })->toArray();




            $listaRes=array();
            for ($i=0; $i <count($result); $i++) {
                for ($j=0; $j < count($result[0]); $j++) {
                    if($result[$i][$j]!=null){
                        echo($result[$i][$j]. "-");
                    }
                }
                echo('</br>');
            }
            $listaTodos=array();
            for ($i=0; $i <count($result); $i++) {
                for ($j=0; $j < count($result[0]); $j++) {
                    if($result[$i][$j]!=null){
                        array_push($listaTodos, $result[$i][$j]);
                    }
                }
            }
            for ($i=0; $i < count($listaTodos); $i++) {
                if($i!=count($listaTodos)-1){
                    if($listaTodos[$i]<$listaTodos[$i+1]){
                        array_push($listaRes, 1);
                    }else{
                        array_push($listaRes, 0);
                    }
                }
            }
            echo('S= ');
            for ($i=0; $i <count($listaRes)  ; $i++) {
                echo($listaRes[$i]. "-");
            }
            $contGrupos=0;


            for ($i=0; $i <count($listaRes)-1  ; $i++) {
                if($listaRes[$i]==$listaRes[$i+1]){
                    $contGrupos++;
                }
            }
            echo('</br>');


            echo ("Total de Datos= ". count($listaTodos));

            $contGrupos=count($listaTodos)-$contGrupos-1;

            echo('</br>');


            echo ("Cantidad de Grupos= ". $contGrupos);

            $Z=1.96;

            $F1=(2*(count($listaTodos))-1)/3;
            echo('</br>');

            echo("uCo= ". $F1);

            $F2=(16*(count($listaTodos))-29)/90;
            echo('</br>');

            echo("VarCo= ". $F2);

            $F3=(24-$F1)/$F2 ;

            echo('</br>');

            print_r("Zo= ". $F3);

            echo('</br>');
            if($F3<$Z){

                echo("DATOS ACEPTADOS");

            }else{

                echo("DATOS NO ACEPTADOS");


            }


    }
}
