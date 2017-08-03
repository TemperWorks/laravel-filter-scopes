<?php

namespace TemperWorks\FilterScopes\Traits;

use Validator;

trait ValidateArrayInput {
    /**
     * Validate given scope input
     *
     * @param $input
     * @param array $extend
     * @param string $originalResourceKey
     * @return bool
     */
    public function validate($input, $extend = [], $originalResourceKey = 'input')
    {
        $input = [$originalResourceKey => $input];

        Validator::make($input, array_merge([
            $originalResourceKey => 'array'
        ], $extend))->validate();

        return true;
    }
}