<?php

namespace Paytic\CommonObjects\Tests\fixtures\Subscription;

use Paytic\CommonObjects\Subscription\SubscriptionImplementation;
use Paytic\CommonObjects\Subscription\SubscriptionInterface;

class Subscription implements SubscriptionInterface
{
    use SubscriptionImplementation;

    public function getBillingPeriod(): string
    {
        return '';
    }
}
