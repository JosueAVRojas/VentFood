<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClienteModel;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $clientes=DB::table('clientes')
            -> Select('id', 'nombre', 'apellido', 'telefono', 'direccion', 'fraccionamiento')
            ->Where('nombre', 'LIKE', '%'.$texto.'%')
            ->orWhere('telefono', 'LIKE', '%'.$texto.'%')
            ->paginate(15);
        return view('listarCliente', compact('clientes', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new ClienteModel;
        $cliente -> nombre=$request->input('nombre'); 
        $cliente -> apellido=$request->input('apellido'); 
        $cliente -> telefono=$request->input('telefono'); 
        $cliente -> direccion=$request->input('direccion'); 
        $cliente -> fraccionamiento=$request->input('fraccionamiento'); 
        $cliente -> save();
        return redirect()->route('listarCliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
