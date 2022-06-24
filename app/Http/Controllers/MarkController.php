<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mark;
use App\Models\Student;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    private $marks;
    public function index()
    {
        return view('admin.mark.add',
        [
            'students'=>Student::all(),
            'courses'=>Course::all()
        ]);
    }
    public function create(Request $request)
    {
       Mark::newMark($request);
       return redirect()->back()->with('message','Mark Info Create Successfully');

    }
    public function manage()
    {
        $this->marks =Mark::all();
        return view('admin.mark.manage',
            [
                'marks'=>$this->marks
            ]);
    }
}
