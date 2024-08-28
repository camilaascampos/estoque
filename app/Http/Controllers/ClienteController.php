<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $clientes = cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request -> cpf;
        $cliente-> telefone = $request -> telefone;
        $cliente-> endereco =$request -> endereco;
        $cliente-> email =$request -> email;
        $cliente-> save();
        
        return redirect() ->route('clientes.index');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $cliente = cliente::findOrFail($id);
       return view('clientes.show', compact('cliente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $cliente =cliente::findOrFail($id);
       $cliente->nome = $request->nome;
       $cliente->cpf = $request -> cpf;
       $cliente-> telefone = $request -> telefone;
       $cliente-> endereco =$request -> endereco;
       $cliente-> email =$request -> email;
       $cliente-> save();

       return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index');

    }
}
