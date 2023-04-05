<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Clientes;
use App\Models\Productos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        // $datos['pedidos'] = Pedidos::paginate(10);
        // return view('pedidosView.index', $datos);

        $pedidos = Pedidos::join('productos', 'pedidos.producto_id', '=', 'productos.id')
        ->join('clientes', 'pedidos.cliente_id', '=', 'clientes.id')
        ->select('pedidos.*', 'productos.nombre AS producto_nombre', 'clientes.nombre AS cliente_nombre')
        ->paginate(10);
    
    return view('pedidosView.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $productos = Productos::pluck('nombre', 'id');
        $clientes = Clientes::pluck('nombre', 'id');
        return view('pedidosView.create', compact('productos', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $datosPedidos = request()->except('_token');


        // Pedidos::insert($datosPedidos);

        // //De esta manera se obtiene un token el cual contiene la información de nuestros envíos de formulario
        // return redirect('pedidos')->with('mensaje', 'Pedido agregado correctamente');
        // dd($request->all());
        $datosPedidos = $request->except('_token');
        $fecha = strtotime($datosPedidos['fecha']);
        $hora = strtotime($datosPedidos['hora']);
        $datosPedidos['fecha'] = date('Y-m-d', $fecha);
        $datosPedidos['hora'] = date('H:i:s', $hora);

        Pedidos::insert($datosPedidos);

        return redirect('pedidos')->with('mensaje', 'Pedido agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $productos = Productos::pluck('nombre', 'id');
        $clientes = Clientes::pluck('nombre', 'id');
        $pedido = Pedidos::findOrFail($id);
        return view('pedidosView.edit', compact('pedido', 'productos', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosPedidos = request()->except(['_token', '_method']);


        Pedidos::where('id', '=', $id)->update($datosPedidos);
        $pedido = Pedidos::findOrFail($id);
        return view('pedidosView.edit', compact('pedido'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pedido = Pedidos::findOrFail($id);

        return redirect('pedidos')->with('mensaje', 'Pedido eliminado correctamente');
    }
}
