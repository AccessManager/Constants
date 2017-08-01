<?php

namespace AccessManager\Constants;


class Subscription
{
    const PREPAID = 'prepaid';
    const ADVANCEPAID = 'advancepaid';

    const PREPAID_STRING = 'Prepaid';
    const ADVANCEPAID_STRING = 'Advance Paid';

    const SUBSCRIPTION_TYPES = [self::PREPAID, self::ADVANCEPAID];

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