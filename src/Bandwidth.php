<?php

namespace AccessManager\Constants;


class Bandwidth
{
    const KB = 1;
    const KB_IN_MB = 1024;
    const KB_IN_GB = 1048576;

    const KBPS_STRING = 'Kbps';
    const MBPS_STRING = 'Mbps';

    const BANDWIDTH_UNITS = [self::KBPS_STRING, self::MBPS_STRING];

    private function __construct()
    {
        throw new \Exception('Cannot Instantiate This Class.');
    }
}