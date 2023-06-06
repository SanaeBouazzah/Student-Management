<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
       //validation
        $data = $request->validate([
          'name' => 'required',
          'address' => 'required',
          'mobile' => 'required'
        ]);
        //insertion
        Student::create($data);
        return redirect()->route('students.index')->with('success', 'You added student successfuly.');
    }
    public function show(Student $student)
    {
      return view('students.show')->with('student',$student);
    }
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
