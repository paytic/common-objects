<?php

namespace Paytic\CommonObjects\Subscription;

use Paytic\CommonObjects\Subscription\Status\HasSubscriptionStatus;
use Paytic\CommonObjects\Subscription\Status\SubscriptionStatusInterface;
use Paytic\CommonObjects\Subscriptions\Builder\HasBillingPeriod;

trait SubscriptionImplementation
{
    use HasSubscriptionStatus;
    use HasBillingPeriod;

    public function canBeActivated(): bool
    {
        return $this->getStatus() === SubscriptionStatusInterface::PENDING;
    }

    public function canBeCanceled(): bool
    {
        return in_array($this->getStatus(), [
            SubscriptionStatusInterface::ACTIVE,
            SubscriptionStatusInterface::DEACTIVATED,
        ]);
    }

    public function canBeDeactivated(): bool
    {
        return $this->getStatus() === SubscriptionStatusInterface::ACTIVE;
    }

}
