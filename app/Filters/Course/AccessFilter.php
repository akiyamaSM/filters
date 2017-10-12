<?php

namespace App\Filters\Course;

use App\Filters\Mappable;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\canFilter;

class AccessFilter implements canFilter{
    use Mappable;
    /**
     * list of mappings
     *
     * @return array
     */
    private function mappings()
    {
        return [
            'free' => true,
            'premium' => false
        ];
    }

    /**
     * filter
     *
     * @param Builder $builder
     * @param $value
     * @return $this
     */
    public function filter(Builder $builder, $value)
    {
        return $builder->where('free', $this->getMappingValue($value));
    }
}