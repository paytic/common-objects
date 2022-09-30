<?php

namespace Paytic\CommonObjects\Tests\Subscription\Behaviour;

use Paytic\CommonObjects\Subscription\Exception\SubscriptionNotChargeable;
use Paytic\CommonObjects\Tests\AbstractTestCase;
use Paytic\CommonObjects\Tests\Fixtures\Subscription\Subscription;

class ChargeableTest extends AbstractTestCase
{
    public function test_guardIsChargeable_throws_exception()
    {
        $subscription = \Mockery::mock(Subscription::class)->makePartial();
        $subscription->shouldReceive('canBeCharged')->once()->andReturn(false);

        static::expectException(SubscriptionNotChargeable::class);
        $subscription->guardIsChargeable();
    }
}
