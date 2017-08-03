<?php

namespace TemperWorks\FilterScopes\Traits;

trait ParseArrayInput {

    public function parseInput($input)
    {
        return explode(',', $input);
    }
}
