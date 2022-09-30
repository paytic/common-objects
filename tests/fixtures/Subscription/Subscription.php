<?php

namespace Paytic\CommonObjects\Tests\Fixtures\Subscription;

use Paytic\CommonObjects\Subscription\SubscriptionImplementation;
use Paytic\CommonObjects\Subscription\SubscriptionInterface;

class Subscription implements SubscriptionInterface
{
    use SubscriptionImplementation;
}
