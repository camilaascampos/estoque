<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = produtos::all();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produtos;
        $produto->nome = $request->nome;
        $produto->validade = $request -> validade;
        $produto-> peso = $request -> peso;
        $produto-> tamanho =$request -> tamanho;
        $produto-> preco =$request -> preco;
        $produto-> cod_produto = $request-> cod_produto;
        $produto-> save();
        
        return redirect() ->route('produtos.index');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $produto = Produtos::findOrFail($id);
       return view('produtos.show', compact('produto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos.edit', compact('produto')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $produto =Produtos::findOrFail($id);
       $produto->nome = $request->nome;
       $produto->validade = $request -> validade;
       $produto-> peso = $request -> peso;
       $produto-> tamanho =$request -> tamanho;
       $produto-> preco =$request -> preco;
       $produto-> cod_porduto = $request-> cod_produto;
       $produto-> save();

       return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index');

    }
}
