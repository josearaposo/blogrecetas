<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $order = $request->query('order', 'titulo');
        $order_dir = $request->query('order_dir', 'asc');
        $recetas = Receta::with(['user', 'categoria'])
            ->selectRaw('recetas.*')
            ->leftJoin('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->leftJoin('users', 'recetas.user_id', '=', 'users.id')
            ->orderBy($order, $order_dir)
            ->orderBy('titulo')
            ->get();
        return view('recetas.index', [
            'recetas' => $recetas,
            'order' => $order,
            'order_dir' => $order_dir,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
