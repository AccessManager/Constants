<?php

namespace AccessManager\Constants;


class ServicePlan
{
    const LIMITED = 1;
    const UNLIMITED = 0;

    const LIMITED_STRING = 'Limited';
    const UNLIMITED_STRING = 'Unlimited';

    private function __construct()
    {
        throw new \Exception('Cannot Instantiate This Class.');
    }
}