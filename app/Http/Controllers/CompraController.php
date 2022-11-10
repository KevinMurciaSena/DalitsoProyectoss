<?php

namespace App\Http\Controllers;

use App\Models\Compra;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Recibo;
use Illuminate\Http\Request;

class compraController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    
        
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Producto $id)
    {


     $producto = Producto::findOrFail($id);

    dd($producto);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $categoria = Categoria::findOrFail($id);
        // $productos = Producto::findOrFail($id);
        // dd($productos);

        // return view("compras.index", compact("productos", "categoria"));
        $producto = Producto::join('categorias','productos.categoria_id', 'categorias.id')
                                        ->select('productos.id', 'productos.nombre', 
                                        'productos.descripcion', 'productos.unidades',
                                        'productos.precio', 'categorias.nombre as categoria',
                                        'productos.foto')
                                        ->where('productos.id', $id)
                                        ->first();

        return view('compras.index', compact('producto'));  
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
