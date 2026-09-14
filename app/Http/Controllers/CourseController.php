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
        Course::create($request->all());

        return redirect()->route('course.list');
    }

    public function show($id)
    {
        $course = Course::find($id);

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
        $course->update($request->all());

        return redirect()->route('course.list');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.list');
    }

    public function apiindex()
    {
        $courses = Course::with(['area', 'training_center'])->get();
        return response()->json($courses);
    }
}