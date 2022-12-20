<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Tests\Subscription;

use Paytic\CommonObjects\Subscription\Status\SubscriptionStatusInterface;
use Paytic\CommonObjects\Tests\AbstractTestCase;
use Paytic\CommonObjects\Tests\Fixtures\Subscription\Subscription;

class SubscriptionTest extends AbstractTestCase
{
    public function testCanBeActivated()
    {
        $subscription = new Subscription();

        self::assertFalse($subscription->canBeActivated());

        $subscription->status = SubscriptionStatusInterface::PENDING;
        self::assertTrue($subscription->canBeActivated());
    }
}
