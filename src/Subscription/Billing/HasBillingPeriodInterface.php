<?php

namespace Paytic\CommonObjects\Subscription\Billing;

interface HasBillingPeriodInterface
{
    public function getBillingPeriod(): string;
}