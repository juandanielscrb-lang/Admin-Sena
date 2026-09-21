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
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $area = new Area();

        $area->name = $validated['name'];

        $area->save();

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($area, 201);
        }

        return redirect()
            ->route('area.list')
            ->with('success', 'Área creada correctamente.');
    }

    // MOSTRAR
    public function show($id)
    {
        $area = Area::findOrFail($id);

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json($area);
        }

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
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $area->name = $validated['name'];

        $area->save();

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($area);
        }

        return redirect()
            ->route('area.list')
            ->with('success', 'Área actualizada correctamente.');
    }

    // ELIMINAR
    public function destroy(Area $area)
    {
        $area->delete();

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json(['message' => 'Área eliminada correctamente.']);
        }

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