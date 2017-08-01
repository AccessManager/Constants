<?php

namespace AccessManager\Constants;


class SupportedRouters
{
    const MIKROTIK = 1;
    const MIKROTIK_STRING = 'MikroTik';

    const ALL = [
        self::MIKROTIK => self::MIKROTIK_STRING
    ];

    public static function typeToString( $type )
    {
        return self::ALL[$type];
    }
}