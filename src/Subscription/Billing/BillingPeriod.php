<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Subscription\Billing;

/**
 * Class BillingPeriod.
 */
class BillingPeriod
{
    public const DAILY = 'daily';
    public const WEEKLY = 'weekly';
    public const MONTHLY = 'monthly';
    public const YEARLY = 'yearly';
    public const PERIOD = ['yearly', 'monthly', 'weekly', 'daily'];
}
