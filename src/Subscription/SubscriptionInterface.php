<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Subscription;

use Paytic\CommonObjects\Subscription\Billing\HasBillingPeriodInterface;

interface SubscriptionInterface extends HasBillingPeriodInterface
{
    public function canBeActivated(): bool;

    public function canBeCanceled(): bool;

    public function canBeDeactivated(): bool;

    public function canBeCharged(): bool;

    public function getStatus(): ?string;

    public function isChargeAttemptsMaxed(): bool;
}
