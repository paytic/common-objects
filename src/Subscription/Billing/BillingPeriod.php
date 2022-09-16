<?php

namespace Paytic\CommonObjects\Subscriptions\Billing;

/**
 * Class BillingPeriod
 * @package Paytic\CommonObjects\Subscriptions\Billing
 */
class BillingPeriod
{
    public const DAILY = 'daily';
    public const WEEKLY = 'weekly';
    public const MONTHLY = 'monthly';
    public const YEARLY = 'yearly';
    public const PERIOD = ['yearly', 'monthly', 'weekly', 'daily'];

}
