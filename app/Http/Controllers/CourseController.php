<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index() 
    {
        // $courses = DB::select('select * from courses');
        // $courses = DB::table('courses')->get();
        $courses = Course::get();
        return view('pages.courses.index', compact('courses'));
    }

    /* public function show(string $id): View
    {
        // $course = DB::selectOne('select * from courses where id=:id', compact('id'));
        // $course = DB::table('courses')->where('id', $id)->first();
        // $course = DB::table('courses')->find($id);
        $course = Course::find($id);
        return view('pages.courses.show', compact('course'));
    } */

    public function show(Course $course): View
    { // сразу выполняется запрос в базу
        return view('pages.courses.show', compact('course'));
    }
}
