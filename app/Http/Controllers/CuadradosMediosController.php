<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuadradosMediosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cuadrados');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $semilla = intval($request->input('semilla'));
        $iteraciones = intval($request->input('iteraciones'));
        $edad = array();

        for ($i = 0; $i < $iteraciones; $i++) {
            $aux = pow($semilla, 2);
            $div1 = (strlen($semilla)) / 2;
            $div2 = $div1 / 2;
            if (strlen($semilla) % 2 === 0) {
                $var3 = round($div2) + 1;
            } else {
                $var3 = round($div2);
            }
            $rest = substr($aux, $var3, strlen($semilla));
            $var4 = (string)$rest;
            $var5 = "0." . $var4;
            $edad[$i] = $var5;
            $semilla = $var4;
        }

        for ($j = 0; $j < $iteraciones; $j++) {

            echo $edad[$j] . '<br>';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function realizar($numero)
    {


    }

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
