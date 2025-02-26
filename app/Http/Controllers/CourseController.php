<?php

namespace App\Http\Controllers;

use App\Models\Courses;

class CourseController extends Controller
{
public function index()
{
    $courses = Courses::all(); // Fetch courses from database
    return view('courses', compact('courses'));
}
    
}
