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
     * @return mixed
     */
    public function index()
    {
        return Course::get();
    }
}
