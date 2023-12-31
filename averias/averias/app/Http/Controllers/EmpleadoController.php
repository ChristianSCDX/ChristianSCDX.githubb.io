<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $datos['empleados']=Empleado::paginate(10);
            return view('empleado.index',$datos);
    }

    /**,
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
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
        $datosEmpleado = request()->except('_token');

       

        if($request->hasfile('foto')){
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');
        }
        Empleado::insert($datosEmpleado);
        return redirect ('/empleado');
        //return  view('empleado.create');
        //return response()->json($datosEmpleado);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except(['_token','_method']);  

        if($request->hasfile('foto')){
            $empleado=  Empleado::findOrFail($id);
            Storage ::delete('public',$empleado->foto);
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');
        }

        Empleado::where('id','=',$id)->update( $datosEmpleado);


        $empleado=  Empleado::findOrFail($id);
        return redirect ('/empleado');
        //return view('empleado.edit',compact('empleado'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado ::destroy($id);
        return redirect('empleado');
    }
}
