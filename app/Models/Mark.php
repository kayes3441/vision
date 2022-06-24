<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    public static $mark;

    public static function newMark($request)
    {
        self::$mark              = new Mark();
        self::$mark->student_id  =$request->student_id;
        self::$mark->course_id   =$request->course_id;
        self::$mark->mark        =$request->mark;
        self::$mark->grade       =$request->grade;
        self::$mark->save();
    }


    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
