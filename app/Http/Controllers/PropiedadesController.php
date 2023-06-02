<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $texto=trim($request->get('texto'));
       $propiedades=DB::table('propiedades')
                    ->select('id','nombre')
                    ->where('nombre','LIKE','%'.$texto.'%')
                    ->orderBy('id','desc')
                    ->paginate(3);
                    return view('propiedades.index',compact('propiedades','texto'));  
        //return DB::table('categorias')->paginate(15);
        }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propiedades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = new Propiedades;
        $registro->nombre=$request->input('nombre');
        $registro->save();
        return redirect()->route('propiedades.index')->with('mensaje','Registro exitoso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Propiedades $propiedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Propiedades $propiedades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Propiedades $propiedades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $registro=Propiedades::findOrFail($id);
            $registro->delete();
            return redirect()->route('propiedades.index')->with('mensaje',' Registro '.$registro->nombre.'eliminado correctamente.');
        }catch(\Illuminate\Database\QueryException $e) {
            return redirect()->route('propiedades.index')->with('mensaje','No se puede eliminar el registro'.$registro->nombre.' porque esta siendo usado. ');

        }
    }
}
