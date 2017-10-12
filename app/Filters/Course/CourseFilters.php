<?php

namespace App\Filters\Course;

use App\Filters\FiltersAbstracts;

class CourseFilters extends FiltersAbstracts{

    protected $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
    ];

}