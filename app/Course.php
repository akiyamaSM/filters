<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Filters\Course\CourseFilters;
use Illuminate\Http\Request;

class Course extends Model
{
    public function scopeFilter(Builder $builder, Request $request)
    {
        return (new CourseFilters($request))->filter($builder);
    }
}
