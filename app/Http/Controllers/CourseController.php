<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    public function create()
    {
       return view('courses.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
          'name' => 'required',
          'syllabus' => 'required',
          'duration' => 'required'
        ]);
        Course::create($data);
        return redirect()->route('courses.index')->with('success', 'you added course successfuly.');
    }
    public function show(Course $course)
    {
        return view('courses.show')->with('course', $course);
    }
    public function edit(Course $course)
    {
        return view('courses.edit')->with('course', $course);
    }
    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
          'name' => 'required',
          'syllabus' => 'required',
          'duration' => 'required'
        ]);
        $course->fill($data)->save();
        return redirect()->route('courses.index')->with('success', 'you updated course succefully.');
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'you have been deleted course successfuly.');
    }
}
