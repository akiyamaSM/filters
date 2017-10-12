<?php


namespace App\Filters;


trait Mappable {

    /**
     * list of mappings
     *
     * @return array
     */
    private function mappings()
    {
        return [
        ];
    }

    /**
     * Get the corresponding value
     *
     * @param $value
     * @return mixed
     */
    public function getMappingValue($value)
    {
        return $this->mappings()[$value];
    }
}