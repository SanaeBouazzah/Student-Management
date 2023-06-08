<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index', compact('enrollments'));
    }
    public function create()
    {
        return view('enrollments.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
          'enroll_no' => 'required',
          'batch_id' => 'required',
          'student_id' => 'required',
          'join_date' => 'required',
          'fee' => 'required',
        ]);
        Enrollment::create($data);
        return redirect()->route('enrollments.index')->with('success', 'you have been created enrollment successfully.');
    }
    public function show(Enrollment $enrollment)
    {
        return view('enrollments.show')->with('enrollment', $enrollment);
    }
    public function edit(Enrollment $enrollment)
    {
        return view('enrollments.edit')->with('enrollment', $enrollment);
    }
    public function update(Request $request, Enrollment $enrollment)
    {
        $data = $request->validate([
          'enroll_no' => 'required',
          'batch_id' => 'required',
          'student_id' => 'required',
          'join_date' => 'required',
          'fee' => 'required',
        ]);
        $enrollment->fill($data)->save();
        return redirect()->route('enrollments.index')->with('success', 'you have been updated enrollment successfuly.');
    }
    public function destroy(Enrollment $enrollment)
    {
      $enrollment->delete();
      return redirect()->route('enrollments.index')->with('sucess', 'you have been deleted enrollment successfully.');
    }
}
