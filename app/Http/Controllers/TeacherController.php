<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\TrainingCenter;

class TeacherController extends Controller
{
    public function index()
    {
    $teachers = Teacher::with(['area', 'training_center'])->get();

    return view('teacher.index', compact('teachers'));
    }

    public function create()
    {
        $areas = Area::all();
        $centers = TrainingCenter::all();

        return view('teacher.create', compact('areas', 'centers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'area_id' => ['nullable', 'exists:areas,id'],
            'training_center_id' => ['nullable', 'exists:training_centers,id'],
        ]);

        $teacher = Teacher::create($validated);

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($teacher->load(['area', 'training_center']), 201);
        }

        return redirect()->route('teacher.list');
    }

    public function show($id)
    {
        $teacher = Teacher::with(['area', 'training_center'])->findOrFail($id);

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json($teacher);
        }

        return view('teacher.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        $areas = Area::all();
        $centers = TrainingCenter::all();

        return view(
            'teacher.edit',
            compact('teacher', 'areas', 'centers')
        );
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'area_id' => ['nullable', 'exists:areas,id'],
            'training_center_id' => ['nullable', 'exists:training_centers,id'],
        ]);

        $teacher->update($validated);

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($teacher->load(['area', 'training_center']));
        }

        return redirect()->route('teacher.list');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json(['message' => 'Docente eliminado correctamente.']);
        }

        return redirect()->route('teacher.list');
    }

    public function apiindex()
    {
        $teachers = Teacher::with(['area', 'training_center'])->get();
        return response()->json($teachers);
    }
}