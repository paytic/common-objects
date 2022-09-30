<?php

namespace Paytic\CommonObjects\Subscription\Behaviour;

use Paytic\CommonObjects\Subscription\Exception\SubscriptionNotChargeable;
use Paytic\CommonObjects\Subscription\Status\SubscriptionStatusInterface;

trait Chargeable
{
    public $charge_at;
    public $charge_attempts;
    public $charge_count;
    public $charge_method;

    public function canBeCharged(): bool
    {
        if (!in_array(
            $this->getStatus(), SubscriptionStatusInterface::STATUSES_CHARGEABLE)) {
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

    public function isChargeAttemptsMaxed(): bool
    {
        return $this->getChargeAttempts() >= $this->getChargedAttemptLimit();
    }

    /**
     * @return int
     */
    public function getChargeAttempts(): int
    {
        return $this->charge_attempts;
    }

    public function getChargedAttemptLimit(): int
    {
        return 3;
    }
}
