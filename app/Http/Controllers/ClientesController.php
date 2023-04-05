<?php
 
namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['clientes'] = Clientes::paginate(10);
        return view('clientesView.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientesView.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosClientes = request()->except('_token');
        

        Clientes::insert($datosClientes);

        //De esta manera se obtiene un token el cual contiene la información de nuestros envíos de formulario
        return redirect('clientes')->with('mensaje', 'Cliente agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $cliente = Clientes::findOrFail($id);
        return view('clientesView.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosClientes = request()->except(['_token', '_method']);

    
        Clientes::where('id','=',$id)->update($datosClientes);
        $cliente = Clientes::findOrFail($id);
        return view('clientesView.edit', compact('cliente'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        
        $cliente = Clientes::findOrFail($id);
        
        return redirect('clientes')->with('mensaje','Cliente eliminado correctamente');
    }
}
