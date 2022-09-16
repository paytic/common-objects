<?php

namespace Paytic\CommonObjects\Subscription;

use Paytic\CommonObjects\Subscriptions\Billing\HasBillingPeriodInterface;

interface SubscriptionInterface extends
    HasBillingPeriodInterface
{

    public function canBeActivated(): bool;

    public function canBeCanceled(): bool;

    public function canBeDeactivated(): bool;

    public function getStatus(): string;
}
