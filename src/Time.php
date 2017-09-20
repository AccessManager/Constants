<?php

namespace AccessManager\Constants;


class Time
{
    const SECONDS_IN_MINUTE = 60;
    const SECONDS_IN_HOUR = 3600;
    const SECONDS_IN_DAY = 86400;
    const SECONDS_IN_MONTH = 2592000;

    const Minutes = 60;
    const Hours = 3600;

    const MINUTE_STRING = 'Minutes';
    const HOUR_STRING = 'Hours';

    const DAY_STRING = 'Days';
    const MONTH_STRING = 'Months';
    const YEAR_STRING = 'Years';

    const TIME_LIMIT_UNITS = [self::MINUTE_STRING, self::HOUR_STRING];
    const TIME_DURATION_UNITS = [self::DAY_STRING, self::MONTH_STRING, self::YEAR_STRING];

    const BILL_DATES = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
                        21, 22, 23, 24, 25, 26, 27, 28,];

    public static function getUnitValue( $constant )
    {
        return constant('self::'. $constant);
    }

    private function __construct()
    {
        throw new \Exception('Cannot Instantiate This Class.');
    }
}