<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalModel;
use App\Models\CargoModel;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $empleados=DB::table('empleados')
        ->SELECT('id', 'nombre', 'telefono', 'sueldo', 'cargo')
        ->WHERE('nombre', 'LIKE', '%'.$texto.'%')
        ->paginate(10);
        
        $cargos = CargoModel::all();

        return view('empleados.listarEmpleados', compact('empleados', 'texto', 'cargos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = CargoModel::all();
        return view("empleados.agregarEmpleados", compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new PersonalModel;
        $empleados->nombre=$request->input('nombre');
        $empleados->telefono=$request->input('telefono');
        $empleados->sueldo=$request->input('sueldo');
        $empleados->cargo=$request->input('cargo');
        $empleados->save();
        return redirect()->route('listarEmpleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargos = CargoModel::all();
        $empleados = PersonalModel::findOrFail($id);
        return view('empleados.editarEmpleados', compact('cargos', 'empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleados = PersonalModel::findOrFail($id);
        $empleados->nombre=$request->input('nombre');
        $empleados->telefono=$request->input('telefono');
        $empleados->sueldo=$request->input('sueldo');
        $empleados->cargo=$request->input('cargo');
        $empleados->save();
        return redirect()->route('listarEmpleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = PersonalModel::findOrFail($id);
        $empleado -> delete();
        return redirect()->route('listarEmpleados.index');
    }
}
