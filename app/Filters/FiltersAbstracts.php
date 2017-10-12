<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class FiltersAbstracts {

    protected $request;

    protected $filters = [];

    /**
     * Create a new Filter
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Filter the DB
     *
     * @param Builder $builder
     * @return Builder
     */
    public function filter(Builder $builder)
    {
        foreach($this->getFilters() as $filter => $value){
            $this->resolve($filter)->filter($builder, $value);
        }
        return $builder;
    }

    /**
     * Create the object that will handle the filter
     *
     * @param $filter
     * @return mixed
     */
    protected function resolve($filter)
    {
        return new $this->filters[$filter];
    }

    /**
     * Get the filtered list
     *
     * @return array
     */
    protected function getFilters()
    {
        return $this->filterFilters($this->filters);
    }

    /**
     * Get only the filters that exists in the request and the array
     *
     * @param $filters
     * @return array
     */
    protected function filterFilters($filters)
    {
        return array_filter($this->request->intersect(array_keys($filters)));
    }
}