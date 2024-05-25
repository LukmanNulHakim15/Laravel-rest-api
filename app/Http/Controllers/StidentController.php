<?php

namespace App\Http\Controllers;

use App\Models\Stident;
use Illuminate\Http\Request;

class StidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Stident::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Stident::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $stident = new Stident;
        $stident->name = $request->name;
        $stident->address = $request->address;
        $stident->class = $request->class;
        $stident->age = $request->age;
        $stident->save();

        return response()->json([
            'status'    => "OK",
            'data'      => [
                'name'      => $stident->name,
                'address'   => $stident->address,
                'class'     => $stident->class,
                'age'       => $stident->age,
            ],
            'result'    => "create data successfully !"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stident  $stident
     * @return \Illuminate\Http\Response
     */
    public function show(Stident $stident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stident  $stident
     * @return \Illuminate\Http\Response
     */
    public function edit(Stident $stident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stident  $stident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $name       = $request->name;
        $address    = $request->address;
        $class      = $request->class;
        $age        = $request->age;

        $stident = Stident::find($id);
        $stident->name = $name;
        $stident->address = $address;
        $stident->class = $class;
        $stident->age = $age;
        $stident->save();

        return response()->json([
            'status'    => "OK",
            'data'      => [
                'name'      => $stident->name,
                'address'   => $stident->address,
                'class'     => $stident->class,
                'age'       => $stident->age,
            ],
            'result'    => "update data successfully !"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stident  $stident
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $stident = Stident::find($id);
        $stident->delete();

        return response()->json([
            'status'    => 'Ok',
            'data'      => [
                'name'      => $stident->name,
                'address'   => $stident->address,
                'class'     => $stident->class,
                'age'       => $stident->age,
            ],
            'result'    => "delete data successfully !"
        ]);
    }
}
