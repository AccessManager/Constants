<?php

namespace AccessManager\Constants;


class Subscription
{
    const FREE = 0;
    const PREPAID = 1;
    const POSTPAID = 2;
    const ADVANCEPAID = 3;

    const FREE_STRING = 'Free';
    const PREPAID_STRING = 'Pre-Paid';
    const POSTPAID_STRING = 'Post-Paid';
    const ADVANCEPAID_STRING = 'Advance-Paid';

    const SUBSCRIPTION_TYPES = [
        self::FREE, self::PREPAID, self::POSTPAID, self::ADVANCEPAID,
    ];

    const SUBSCRIPTION_TYPES_LIST = [
        self::FREE          =>  self::FREE_STRING,
        self::PREPAID       => self::PREPAID_STRING,
        self::POSTPAID      =>  self::POSTPAID_STRING,
        self::ADVANCEPAID   =>    self::ADVANCEPAID_STRING,
    ];

    const PRO_RATA = 1;
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const STATUS_TERMINATED = 2;

    const STATUS_ACTIVE_STRING = 'Active';
    const STATUS_INACTIVE_STRING = 'Inactive';
    const STATUS_TERMINATED_STRING = 'Terminated';

    const SUBSCRIPTION_STATUSES = [
        self::STATUS_ACTIVE         =>      self::STATUS_ACTIVE_STRING,
        self::STATUS_INACTIVE       =>      self::STATUS_INACTIVE_STRING,
        self::STATUS_TERMINATED     =>      self::STATUS_TERMINATED_STRING,
    ];

}