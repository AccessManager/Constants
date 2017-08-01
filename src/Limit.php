<?php

namespace AccessManager\Constants;


class Limit
{
    const TIME_LIMIT = 0;
    const DATA_LIMIT = 1;
    const BOTH_LIMITS = 2;


    private function __construct()
    {
        throw new \Exception('Cannot Instantiate This Class.');
    }
}