<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseTeacherController extends Controller
{
    //
        public function store(Request $request) {
        $course = Course::create($request->all());
        return $course;
    }
}
