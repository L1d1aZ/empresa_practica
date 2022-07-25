<?php

namespace App\Http\Controllers;

use App\Models\Custumer;
use Illuminate\Http\Request;

class CustumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $custumers= customer::SimplePaginate();
        return view('custumers.index',compact ('$custumers') );
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('custumers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $custumers=new Custumer();
        $custumers->Nombre =$request-> Nombre;
        $custumers->Tipo_documento =$request->Tipo_documento;
        $custumers->numero_doc =$request->numero_doc;
        $custumers->direccion =$request->direccion; 
        $custumers->celular =$request->celular; 
        $custumers->email =$request->email;
        $custumers->save();
        return 'Nuevo customer agregado con exito' ;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function show(Custumer $custumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function edit(Custumer $custumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Custumer $custumer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custumer $custumer)
    {
        //
    }
}
