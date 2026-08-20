<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

class ApprenticeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $aprendices = Apprentice::query();

        if ($search) {
            $aprendices->where(function ($query) use ($search) {

                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%")
                      ->orWhere('cell_number', 'like', "%{$search}%");

            });
        }

        $aprendices = $aprendices
            ->with(['course', 'computer'])
            ->get();

        return view('apprentice.index', compact('aprendices'));
    }

    public function show($id)
    {
        $aprendice = Apprentice::with(['course', 'computer'])
            ->findOrFail($id);

        return view('apprentice.show', compact('aprendice'));
    }

    // FORMULARIO PARA CREAR
    public function create()
    {
        $courses = Course::all();

        $computers = Computer::whereDoesntHave('apprentice')
            ->get();

        return view(
            'apprentice.create',
            compact('courses', 'computers')
        );
    }

    // GUARDAR
    public function store(Request $request)
    {
        Apprentice::create($request->all());

        return redirect()
            ->route('apprentice.list')
            ->with('success', 'Aprendiz creado correctamente.');
    }

    // FORMULARIO PARA EDITAR
    public function edit($id)
    {
        $aprendice = Apprentice::findOrFail($id);

        $cursos = Course::all();

        $computers = Computer::whereDoesntHave('apprentice')
            ->orWhere('id', $aprendice->computer_id)
            ->get();

        return view(
            'apprentice.edit',
            compact('aprendice', 'cursos', 'computers')
        );
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $aprendice = Apprentice::findOrFail($id);

        $aprendice->update($request->all());

        return redirect()
            ->route('apprentice.list')
            ->with('success', 'Aprendiz actualizado correctamente.');
    }

    // ELIMINAR
    public function destroy($id)
    {
        $aprendice = Apprentice::findOrFail($id);

        $aprendice->delete();

        return redirect()
            ->route('apprentice.list')
            ->with('success', 'Aprendiz eliminado correctamente.');
    }
}