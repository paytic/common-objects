<?php

namespace Paytic\CommonObjects\Subscription\Behaviours;

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
}
