<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

interface canFilter {

    public function filter(Builder $builder, $value);
}