<?php

namespace TemperWorks\FilterScopes\Traits;

use Carbon\Carbon;

trait ParseDateArrayInput {

    /**
     * Parse scope input
     *
     * @param $input
     * @return array
     */
    public function parseInput($input)
    {
        $dates = explode(',', $input);

        return array_map(function ($date) {
            return Carbon::parse($date)->startOfDay()->toDateString();
        }, $dates);
    }
}
