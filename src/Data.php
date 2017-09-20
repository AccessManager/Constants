<?php

namespace AccessManager\Constants;


class Data
{
    const BYTES_IN_KB = 1024;
    const BYTES_IN_MB = 1048576;
    const BYTES_IN_GB = 1073741824;
    const BYTES_IN_FOUR_GB = 4294967296;

    const KB = 1024;
    const MB = 1048576;
    const GB = 1073741824;
    CONST FOUR_GB = 4294967296;

    const KB_STRING = 'KB';
    const MB_STRING = 'MB';
    const GB_STRING = 'GB';

    const DATA_LIMIT_UNITS = [self::MB_STRING, self::GB_STRING];

    public static function getUnitValue( $constant )
    {
        return constant('self::'. $constant);
    }

    private function __construct()
    {
        throw new \Exception('Cannot Instantiate This Class.');
    }
}