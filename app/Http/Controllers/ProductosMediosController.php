<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosMediosController extends Controller
{
    public function index()
    {
        return view('productos');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $x0 = intval($request->input('x0'));
        $x1 = intval($request->input('x1'));
        $numero_valores = (strlen("$x0")) * 2;
        $iteraciones = intval($request->input('iteraciones'));
        $array = array();
        for ($i = 0; $i < $iteraciones; $i++) {
            $mult = $x0 * $x1;
            $mult_string = "$mult";
            if ((strlen($mult_string)) === $numero_valores) {
                $cantidad = (strlen($mult_string)) / 4;
                $x0 = $x1;
                $x1 = substr($mult_string, (0 + $cantidad), -$cantidad);

                $array[$i] = '0.' . $x1;

            } else {
                $nuevo_mult_string = $this->agregarCero($mult_string, $numero_valores);
                $cantidad = (strlen($nuevo_mult_string)) / 4;
                $x0 = $x1;
                $x1 = substr($nuevo_mult_string, (0 + $cantidad), -$cantidad);
                $array[$i] = '0.' . $x1;
            }
            echo $array[$i] . '<br>';
        }
    }

    private function agregarCero($texto, $numero_ceros)
    {
        $faltantes = $numero_ceros - strlen($texto);
        for ($i = 0; $i < $faltantes; $i++) {
            $texto = '0' . $texto;
        }
        return $texto;
    }

}
