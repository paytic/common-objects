<?php

namespace Paytic\CommonObjects\Subscription\Behaviour;

use Paytic\CommonObjects\Subscription\Exception\SubscriptionNotChargeable;
use Paytic\CommonObjects\Subscription\Status\SubscriptionStatusInterface;

trait Chargeable
{
    public function canBeCharged(): bool
    {
        if (!in_array(
            $this->getStatus(),
            [SubscriptionStatusInterface::ACTIVE, SubscriptionStatusInterface::PENDING])) {
            return false;
        }

        return true;
    }

    public function guardIsChargeable(): void
    {
        if (false === $this->canBeCharged()) {
            throw new SubscriptionNotChargeable();
        }
    }
}
