<?php

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\canFilter;

class SubjectFilter implements canFilter{

    public function filter(Builder $builder, $value)
    {
        return $builder->whereHas('subjects', function($builder) use ($value) {
            return $builder->where('slug', $value);
        });
    }
}