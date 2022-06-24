<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $courses;
    private $course;

    public function index()
    {
        return view('admin.course.add-course');
    }
    public function create(Request $request)
    {
        Course::newCourse($request);
        return redirect()->back()->with('message','Course Info Create Successfully');
    }
    public function manage()
    {
        $this->courses =Course::all();
        return view('admin.course.manage',
        [
            'courses'=>$this->courses
        ]);
    }
    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('admin.course.edit',
            [
                'course'=>$this->course
            ]);
    }
    public  function update(Request $request,$id)
    {
        Course::updateCourse($request,$id);
        return redirect('/manage-course')->with('message','Update Info Successfully');
    }

    public function delete($id)
    {
        $this->course = Course::find($id);
        $this->course->delete();
        return redirect('/manage-course')->with('message','Delete Course Info Successfully');
    }
}
