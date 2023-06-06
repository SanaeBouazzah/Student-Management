<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class teacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }
    public function create()
    {
        return view('teachers.create');
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
        Teacher::create($data);
        return redirect()->route('teachers.index')->with('success', 'You added teacher successfuly.');
    }
    public function show(Teacher $teacher)
    {
      return view('teachers.show')->with('teacher',$teacher);
    }
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit')->with('teacher', $teacher);
    }
    public function update(Request $request, Teacher $teacher)
    {
       //validation
       $data = $request->validate([
        'name' => 'required',
        'address' => 'required',
        'mobile' => 'required'
      ]);
      //insertion
      $teacher->fill($data)->save($data);
      return redirect()->route('teachers.index')->with('success', 'You updated teacher successfuly.');
    }
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'you have been deleted teacher successfuly.');
    }
}
