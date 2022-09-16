<?php

namespace Paytic\CommonObjects\Subscriptions\Billing;

interface HasBillingPeriodInterface
{
    public function getBillingPeriod(): string;
}