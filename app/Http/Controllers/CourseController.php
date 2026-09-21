<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\TrainingCenter;

class CourseController extends Controller
{
   public function index(Request $request)
    {
    $search = $request->search;

    $courses = Course::with(['area', 'training_center']);

    if ($search) {
        $courses->where('course_number', 'like', "%{$search}%");
    }

    $courses = $courses->get();

    return view('course.index', compact('courses'));
}

    public function create()
    {
        $areas = Area::all();
        $centers = TrainingCenter::all();

        return view('course.create', compact('areas', 'centers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_number' => ['required', 'string', 'max:45'],
            'day' => ['required', 'string', 'max:45'],
            'area_id' => ['nullable', 'exists:areas,id'],
            'training_center_id' => ['nullable', 'exists:training_centers,id'],
        ]);

        $course = Course::create($validated);

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($course->load(['area', 'training_center']), 201);
        }

        return redirect()->route('course.list');
    }

    public function show($id)
    {
        $course = Course::with(['area', 'training_center'])->findOrFail($id);

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json($course);
        }

        return view('course.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $areas = Area::all();
        $centers = TrainingCenter::all();

        return view(
            'course.edit',
            compact('course', 'areas', 'centers')
        );
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'course_number' => ['required', 'string', 'max:45'],
            'day' => ['required', 'string', 'max:45'],
            'area_id' => ['nullable', 'exists:areas,id'],
            'training_center_id' => ['nullable', 'exists:training_centers,id'],
        ]);

        $course->update($validated);

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($course->load(['area', 'training_center']));
        }

        return redirect()->route('course.list');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json(['message' => 'Curso eliminado correctamente.']);
        }

        return redirect()->route('course.list');
    }

    public function apiindex()
    {
        $courses = Course::with(['area', 'training_center'])->get();
        return response()->json($courses);
    }
}