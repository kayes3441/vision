<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    private static $course;

    public static function newCourse($request)
    {
        self::$course              = new Course();
        self::$course->name        =$request->name;
        self::$course->code        =$request->code;
        self::$course->description =$request->description;
        self::$course->save();
    }
    public static function updateCourse($request,$id)
    {
        self::$course =Course::find($id);
        self::$course->name        =$request->name;
        self::$course->code        =$request->code;
        self::$course->description =$request->description;
        self::$course->save();

    }
}
