<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ChiCuadradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chiCuadradoIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('archivo');
        $rangos = [];
        $arrayOI = [];
        $arrayE = [];
        $arrayRes = [];
//dd($file);
        $results = Excel::load($file, function ($reader) {
//            $results = $reader->all();
//            dd($results->toArray());

        })->toArray();
//dd($results);
        $contador = 0;
        foreach ($results as $res) {
            $contador += count($res);
        }
        $rango_intervalo = sqrt($contador);
        $cantidad_intervao = intval(round($contador / $rango_intervalo, 0));

//        dd($rango_intervalo, $contador);
        $val = 0;
        $i = 0;
        do {
            if ($val < 10) {
                $salida = '0.0' . $val . ' - ';
            } else {
                $salida = '0.' . $val . ' - ';
            }

            $val += round($rango_intervalo);

            if ($i === $cantidad_intervao - 1) {
                $salida .= 1;
            } else {
                if ($val < 10) {
                    $salida .= '0.0' . $val;
                } else {
                    $salida .= '0.' . $val;
                }
            }
            $i++;
            $rangos[$i - 1] = $salida;

        } while ($i < $cantidad_intervao);


        $i = 0;

        foreach ($rangos as $rango) {
            $pos = strpos($rango, '-');
            $inicio = floatval(substr($rango, 0, $pos - 1));
            $fin = floatval(substr($rango, $pos + 1, strlen($rango)));

            $cont2 = 0;
            foreach ($results as $res) {
//                    $contador += count($res);
                foreach ($res as $r) {
                    if ($r >= $inicio && $r < $fin) {
                        $cont2++;
                    }
                }

            }

            $arrayOI[$i] = $cont2;
            $arrayE[$i] = $cantidad_intervao;
            $arrayRes[$i] = (pow(($cantidad_intervao - $cont2), 2)) / $cantidad_intervao;
            $i++;
        }

        return view('chiCuadrado', compact(['rangos', 'arrayOI', 'arrayE', 'arrayRes']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
