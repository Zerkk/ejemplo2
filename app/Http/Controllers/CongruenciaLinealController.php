<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongruenciaLinealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('congruenciaLineal');
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

        $x0 = intval($request->input('x0'));
        $k = intval($request->input('k'));
        $c = intval($request->input('c'));
        $g = intval($request->input('g'));
        if ($c % 2 === 0) {
            return response('Error de datos');
        }
        $array = array();
        $m = pow(2, $g);
        for ($i = 0; $i < $m; $i++) {
            $a = 1 + 4 * $k;
            $x = (($a * $x0) + $c);
            $aux = $x % $m;
            $r1 = $aux / ($m - 1);

            $array[$i] = $r1;
            $x0 = $aux;
            echo round($array[$i], 3) . '<br>';;
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
