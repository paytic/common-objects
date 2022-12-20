<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Subscription\Billing;

interface HasBillingPeriodInterface
{
    public function getBillingPeriod(): string;
}
