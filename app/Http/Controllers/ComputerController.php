<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ComputerController extends Controller
{
    // ... (tus otros métodos index, create, etc. se quedan igual)

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => ['required', 'string', 'max:255'],
            'brand'  => ['required', 'string', 'max:255'],
            'imagen' => ['nullable', 'file', 'image', 'max:5120'], 
        ]);

        $computer = new Computer();
        $computer->number = $validated['number'];
        $computer->brand  = $validated['brand'];

        // 2. Subimos la imagen directamente a Cloudinary
        $file = $request->file('imagen');

        if ($file) {
            // Sube la imagen a la nube y obtiene la URL segura y absoluta
            $uploadedFileUrl = Cloudinary::upload($file->getRealPath())->getSecurePath();

            // Guardamos esa URL completa en la columna urlFoto de la base de datos
            $computer->urlFoto = $uploadedFileUrl;
        }

        $computer->save();

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($computer, 201);
        }

        return redirect()->route('computer.list');
    }

    // ... (show, edit, destroy, apiindex se quedan igual)

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