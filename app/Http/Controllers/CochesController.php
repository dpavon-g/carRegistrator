<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class CochesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coches = Coche::all();
        return view('coches', compact('coches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'matricula' => 'required|string|max:8',
            'owner' => 'required|string|max:255',
        ]);

        Coche::create($request->all());

        $coches = Coche::all();
        return view('coches', compact('coches'));
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
    public function show(string $idMatricula)
    {
        $coche = Coche::findOrFail($idMatricula);
        return view('infoCoche', compact('coche'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Coche::destroy($id);
        $coches = Coche::all();
        return view('coches', compact('coches'));
    }

    public function editCar(Request $request, string $id)
    {
        $request->validate([
            'marca' => 'nullable|string|max:255',
            'modelo' => 'nullable|string|max:255',
            'matricula' => 'nullable|string|max:8',
            'owner' => 'nullable|string|max:255',
        ]);

        $coche = Coche::findOrFail($id);
        $data = array_filter($request->only(['marca', 'modelo', 'matricula', 'owner']), function ($value) {
            return !is_null($value);
        });
        $coche->update($data);

        $coches = Coche::all();
        return view('coches', compact('coches'));
    }
}
