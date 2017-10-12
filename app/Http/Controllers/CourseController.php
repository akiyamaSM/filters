<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{

    /**
     * Get all the courses
     *
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return Course::filter($request)->get();
    }
}
