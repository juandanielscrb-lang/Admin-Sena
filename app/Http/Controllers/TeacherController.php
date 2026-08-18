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
        Teacher::create($request->all());

        return redirect()->route('teacher.list');
    }

    public function show($id)
    {
        $teacher = Teacher::find($id);

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
        $teacher->update($request->all());

        return redirect()->route('teacher.list');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.list');
    }
}