<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        $username = session('username');
        return view('Students', compact('students', 'username'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = Students::create([
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'Gender' => $request->Gender,
            'DateOfBirth' => $request->DateOfBirth,
            'ContactNumber' => $request->ContactNumber,
            'Email' => $request->Email,
            'Address' => $request->Address,
            'EnrollmentDate' => $request->EnrollmentDate
        ]);

        return redirect('/Students')->with('success', 'Student added successfully');
    }

    public function edit($id)
    {
        $student = Students::findOrFail($id);
        return view('edit-student', compact('student'));
    }
      public function update(Request $request, $id)
      {
          $request->validate([
              'FirstName' => 'required',
              'LastName' => 'required',
              'Gender' => 'required',
              'DateofBirth' => 'required|date',
              'ContactNumber' => 'required',
              'Email' => 'required|email|unique:students,Email,' . $id . ',StudentId',
              'Address' => 'required',
              'EnrollmentDate' => 'required|date'
          ]);

          $student = Students::findOrFail($id);
          $student->update($request->all());

          return redirect('/Students')->with('success', 'Student updated successfully');
      
    }
      public function destroy($id)
      {
          $student = Students::findOrFail($id);
          $student->delete();
          return redirect('/Students')->with('success', 'Student deleted successfully');
      }
    

    public function Dashboard()
    {
        $username = session('username');
        $totalStudents = Students::count();
        $activeStudents = $totalStudents;
        $totalCourses = 15;
        $totalStaff = 25;

        $recentActivities = [
            (object)['description' => 'New student registered', 'date' => now()->format('Y-m-d')],
            (object)['description' => 'Course updated', 'date' => now()->subDay()->format('Y-m-d')],
        ];

        return view('Dashboard', compact(
            'username',
            'totalStudents',
            'activeStudents',
            'totalCourses',
            'totalStaff',
            'recentActivities'
        ));
    }
}
