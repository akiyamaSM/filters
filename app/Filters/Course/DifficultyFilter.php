<?php

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\canFilter;

class DifficultyFilter implements canFilter{

    public function filter(Builder $builder, $value)
    {
        return $builder->where('difficulty', $value);
    }
}