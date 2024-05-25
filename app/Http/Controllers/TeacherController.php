<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status'    => "OK",
            'data'      => [Teacher::all()],
            'result'    => "list data successfully !"
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher;
        $name = $teacher->name = $request->name;
        $address = $teacher->address = $request->address;
        $created_by = $teacher->created_by = $request->created_by;
      
        $teacher->save();

        return response()->json([
            'status'            => 'Ok',
            'data'              => [
                'name'          => $teacher->name,
                'address'       => $teacher->address,
                'created_by'    => $teacher->created_by
            ],
            'result'            => "create data successfully"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $name       = $request->name;
        $address    = $request->address;
        $update_by  = $request->updated_by;

        $teacher                = Teacher::find($id);
        $techer->name           = $name;
        $teacher->address       = $address;
        $teacher->updated_by    = $updated_by;
        $teacher->save();

        return response()->json([
            'status'    => 'Ok',
            'data'      =>[
                'name'      => $teacher->name,
                'address'   => $teacher->address,
                'updated_by'=> $teacher->updated_by
            ],
            'result'    => "update data successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return response()->json([
            'status'    => 'Ok',
            'data'      => [
                'nama'      => $teacher->name,
                'address'   => $teacher->address,
            ],
            'result'        => 'delete data successfully'
        ]);
    }
}
