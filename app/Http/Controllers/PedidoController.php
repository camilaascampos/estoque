<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = new pedido;
        $pedido->numero = $request->numero;
        $pedido->data = $request -> data;
        $pedido-> status = $request -> status;
        $pedido-> item =$request -> item;
        $pedido-> save();
        
        return redirect() ->route('pedidos.index');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $pedido = pedido::findOrFail($id);
       return view('pedidos.show', compact('pedido'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $pedido =pedido::findOrFail($id);
       $pedido->numero = $request->numero;
       $pedido->data = $request -> data;
       $pedido-> status = $request -> status;
       $pedido-> item =$request -> item;
       $pedido-> save();

       return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = pedido::findOrFail($id);
        $pedido->delete();
        return redirect()->route('pedidos.index');

    }
}
