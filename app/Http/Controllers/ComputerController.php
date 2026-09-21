<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    // LISTAR Y BUSCAR
    public function index(Request $request)
    {
        $search = $request->search;

        $computers = Computer::query();

        if ($search) {
            $computers->where(function ($query) use ($search) {
                $query->where('number', 'like', "%{$search}%")
                      ->orWhere('brand', 'like', "%{$search}%");
            });
        }

        $computers = $computers->get();

        return view('computer.index', compact('computers'));
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'string', 'max:255'],
            'urlFoto' => ['nullable', 'file', 'image', 'max:2048'],
        ]);

        $computer = new Computer();

        $computer->number = $validated['number'];
        $computer->brand = $validated['brand'];

        // Adjuntar la foto
        $file = $request->file('urlFoto');

        if ($file) {
            $nombreArchivo = "foto_" . time() . "." . $file->guessExtension();

            $file->storeAs('public/images', $nombreArchivo);

            $computer->urlFoto = $nombreArchivo;
        }

        $computer->save();

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($computer, 201);
        }

        return redirect()->route('computer.list');
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json($computer);
        }

        return view('computer.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        $validated = $request->validate([
            'number' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'string', 'max:255'],
        ]);

        $computer->number = $validated['number'];
        $computer->brand = $validated['brand'];

        $computer->save();

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($computer);
        }

        return redirect()->route('computer.list');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json(['message' => 'Computador eliminado correctamente.']);
        }

        return redirect()->route('computer.list');
    }

    public function apiindex()
    {
        $computers = Computer::all();
        return response()->json($computers);
    }
}