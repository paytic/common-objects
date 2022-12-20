<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Tests\Subscription\Behaviour;

use Paytic\CommonObjects\Subscription\Exception\SubscriptionNotChargeable;
use Paytic\CommonObjects\Tests\AbstractTestCase;
use Paytic\CommonObjects\Tests\Fixtures\Subscription\Subscription;

class ChargeableTest extends AbstractTestCase
{
    public function testGuardIsChargeableThrowsException()
    {
        $subscription = \Mockery::mock(Subscription::class)->makePartial();
        $subscription->shouldReceive('canBeCharged')->once()->andReturn(false);

        static::expectException(SubscriptionNotChargeable::class);
        $subscription->guardIsChargeable();
    }
}
