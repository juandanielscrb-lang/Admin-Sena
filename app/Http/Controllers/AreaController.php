<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $areas = Area::query();

        if ($search) {
            $areas->where('name', 'like', "%{$search}%");
        }

        $areas = $areas->get();

        return view('area.index', compact('areas'));
    }

    // FORMULARIO PARA CREAR
    public function create()
    {
        return view('area.create');
    }

    // GUARDAR
    public function store(Request $request)
    {
        $area = new Area();

        $area->name = $request->name;

        $area->save();

        return redirect()
            ->route('area.list')
            ->with('success', 'Área creada correctamente.');
    }

    // MOSTRAR
    public function show($id)
    {
        $area = Area::findOrFail($id);

        return view('area.show', compact('area'));
    }

    // FORMULARIO PARA EDITAR
    public function edit(Area $area)
    {
        return view('area.edit', compact('area'));
    }

    // ACTUALIZAR
    public function update(Request $request, Area $area)
    {
        $area->name = $request->name;

        $area->save();

        return redirect()
            ->route('area.list')
            ->with('success', 'Área actualizada correctamente.');
    }

    // ELIMINAR
    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()
            ->route('area.list')
            ->with('success', 'Área eliminada correctamente.');
    }

    public function apiindex()
    {
        $areas = Area::all();
        return response()->json($areas);
    }
}