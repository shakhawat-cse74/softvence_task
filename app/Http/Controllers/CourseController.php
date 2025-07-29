<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.course.index',['coureses' => Course::all()]);
    }

    public function create()
    {
        return view('admin.course.create',['categories'=>Category::where('status',1)->get()]);
    }
    public function store(Request $request)
    {
        Course::newCourse($request);
        return redirect('/course')->with('success', 'Course created successfully!');
    }
    
    public function edit($id)
    {
        Course::with(['modules.contents', 'category'])->find($id);
        return view('admin.course.edit',[
            'course'     => Course::find($id),
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->modules);
        Course::updateCourse($request, $id);
        return redirect('/course')->with('success', 'Course updated successfully.');

    }
    
    public function destroy($id)
    {
        Course::deleteCourse($id);
        return back()->with('success', 'Course delete successfully.');
    }
}
