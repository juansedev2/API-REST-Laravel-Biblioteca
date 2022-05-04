<?php

namespace App\Http\Controllers;

use App\Models\Prestamo; // Incluir el modelo 
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Traer todos los registros que existan
        $prestamos = Prestamo::all(); // Obtiene todos los modelos de la base de datos en un arreglo
        return $prestamos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Almacenar cada campo
        $prestamo = new Prestamo();
        $prestamo->nombre_lector = $request->nombre_lector;
        $prestamo->cedula = $request->cedula;
        $prestamo->codigo_libro = $request->codigo_libro;
        $prestamo->estado = $request->estado;
        $prestamo->comentario = $request->comentario;

        $prestamo->save(); // Se almacena ya en la base de datos
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        // Actualizamos algún registros
        $prestamo = Prestamo::findOrFail($request->id); // Busca por parámetro el registro y ahora se actualiza ese específicamente
        $prestamo->nombre_lector = $request->nombre_lector;
        $prestamo->cedula = $request->cedula;
        $prestamo->codigo_libro = $request->codigo_libro;
        $prestamo->estado = $request->estado;
        $prestamo->comentario = $request->comentario;

        $prestamo->save(); // Se almacena ya en la base de datos

        return $prestamo; // Lo devolvemos para confirmar su actialización


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */

     /*Versión de Laravel
    public function destroy(Prestamo $prestamo)
    {
        $prestamo = Prestamo::destroy($request->id);
        return $prestamo;
    } */

        // Versión mía
        public function destroy(Request $request)
        {
            $prestamo = Prestamo::destroy($request->id);
            return $prestamo;
        } 
    


}
