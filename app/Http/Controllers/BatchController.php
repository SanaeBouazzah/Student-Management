<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\Course;
use Illuminate\Http\Request;

class batchController extends Controller
{
    public function index()
    {
        $batches = batch::all();
        return view('batches.index', compact('batches'));
    }
    public function create()
    {
       $courses = Course::pluck('name', 'id');
      return view('batches.create', compact('courses'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
          'name' => 'required',
          'course_id' => 'required',
          'start_date' => 'required',
        ]);
        batch::create($data);
        return redirect()->route('batches.index')->with('success','you have been added batch successfuly.');
    }
    public function show(batch $batch)
    {
        return view('batches.show')->with('batch', $batch);
    }
    public function edit(batch $batch)
    {
      $courses = Course::pluck('name', 'id');
        return view('batches.edit', compact('courses'))->with('batch', $batch);
    }
    public function update(Request $request, batch $batch)
    {
      $data = $request->validate([
        'name' => 'required',
        'course_id' => 'required',
        'start_date' => 'required',
      ]);
      
      $batch->fill($data)->save();
      return redirect()->route('batches.index')->with('success','you have been updated batch successfuly.');
    }
    public function destroy(batch $batch)
    {
        $batch->delete();
        return redirect()->route('batches.index')->with('success', 'you have been deleted batch successfuly.');
    }
}
