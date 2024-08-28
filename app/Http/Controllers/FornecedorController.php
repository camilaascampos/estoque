<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
    $fornecedors = fornecedor::all();
    return view('fornecedors.index', compact('fornecedors'));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
   return view('fornecedors.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $fornecedor = new fornecedor;
    $fornecedor->nome = $request->nome;
    $fornecedor->cnpj = $request -> cnpj;
    $fornecedor-> endereco = $request -> endereco;
    $fornecedor-> telefone =$request -> telefone;
    $fornecedor-> tipo_de_fornecedor = $request-> tipo_de_fornecedor;
    $fornecedor-> save();
    
    return redirect() ->route('fornecedors.index');


}

/**
 * Display the specified resource.
 *
 * @param  \App\Models\fornecedors  $fornecedors
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
   $fornecedor = fornecedor::findOrFail($id);
   return view('fornecedors.show', compact('fornecedor'));

}

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\fornecedors  $fornecedors
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $fornecedor = fornecedor::findOrFail($id);
    return view('fornecedors.edit', compact('fornecedor')); 
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\fornecedors  $fornecedors
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
   $fornecedor =fornecedor::findOrFail($id);
   $fornecedor->nome = $request->nome;
   $fornecedor->cnpj = $request -> cnpj;
   $fornecedor-> endereco = $request -> endereco;
   $fornecedor-> telefone =$request -> telefone;
   $fornecedor-> tipo_de_fornecedor = $request-> tipo_de_fornecedor;
   $fornecedor-> save();

   return redirect()->route('fornecedors.index');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\fornecedors  $fornecedors
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $fornecedor = fornecedor::findOrFail($id);
    $fornecedor->delete();
    return redirect()->route('fornecedors.index');

}
}
