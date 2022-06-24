<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    private $students;
    private $student;
    public function index()
    {
        return view('admin.student.add-student');
    }
    public function create(Request $request)
    {
        Student::newStudent($request);
        return redirect()->back()->with('message','Student info Create successfully');
    }
    public function manage()
    {
        $this->students=Student::all();
        return view('admin.student.manage',
        [
            'students'=>$this->students
        ]);
    }
    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('admin.student.edit-student',
        [
            'student'=>$this->student
        ]);
    }
    public  function update(Request $request,$id)
    {
        Student::updateStudent($request,$id);
        return redirect('/manage-student')->with('message','Update Info Successfully');
    }
    public function delete($id)
    {
        $this->student = Student::find($id);
        if(file_exists($this->student->image))
        {
            unlink($this->student->image);
        }
        $this->student->delete();
        return redirect('/manage-student')->with('message','Delete student Info Successfully');
    }
}
