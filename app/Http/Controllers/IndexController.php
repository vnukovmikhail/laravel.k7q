<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        // $courses = DB::table('courses')->get();
        $courses = Course::all();
        return view('pages.index', compact('courses'));
    }
}
