<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Subscription;

use Paytic\CommonObjects\Subscription\Billing\HasBillingPeriod;
use Paytic\CommonObjects\Subscription\Status\HasSubscriptionStatus;
use Paytic\CommonObjects\Subscription\Status\SubscriptionStatusInterface;

trait SubscriptionImplementation
{
    use Behaviour\Chargeable;
    use HasBillingPeriod;
    use HasSubscriptionStatus;

    public function canBeActivated(): bool
    {
        return SubscriptionStatusInterface::PENDING === $this->getStatus();
    }

    public function canBeCanceled(): bool
    {
        return \in_array($this->getStatus(), [
            SubscriptionStatusInterface::ACTIVE,
            SubscriptionStatusInterface::DEACTIVATED,
        ]);
    }

    public function canBeDeactivated(): bool
    {
        return SubscriptionStatusInterface::ACTIVE === $this->getStatus();
    }
}
