<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongruenciaCuadraticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('congruenciaLineal');
        return view('congruenciaCuadratica');
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
//        $x0 = 13;
//        $m = 8;
//        $a = 26;
//        $b = 27;
//        $c = 27;
        $x0 = intval($request->input('x0'));
        $m = intval($request->input('m'));
        $a = intval($request->input('a'));
        $b = intval($request->input('b'));
        $c = intval($request->input('c'));
        for ($i = 0; $i < $m; $i++) {
            $formula = (($a * pow($x0, 2)) + ($b * $x0) + $c);
            $res = $formula % $m;
            $x0 = $res;
            echo $x0 . '<br>';
        }
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
