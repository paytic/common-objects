<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Subscription\Billing;

/**
 * Trait ManageBillingCycle.
 */
trait HasBillingPeriod
{
    public int $billing_interval;

    public string $billing_period;

    public function setBillingInterval(int|string $billing_interval): void
    {
        $this->billing_interval = (int) $billing_interval;
    }

    public function getBillingInterval(): int
    {
        return $this->billing_interval;
    }

    public function getBillingPeriod(): string
    {
        return $this->billing_period;
    }

    /**
     * @param int $every
     *
     * @return self
     */
    public function billEveryDay($every = 1)
    {
        return $this->billEvery($every, BillingPeriod::DAILY);
    }

    /**
     * @param int $every
     *
     * @return self
     */
    public function billEveryWeek($every = 1)
    {
        return $this->billEvery($every, BillingPeriod::WEEKLY);
    }

    /**
     * @param int $every
     *
     * @return self
     */
    public function billEveryMonth($every = 1)
    {
        return $this->billEvery($every, BillingPeriod::MONTHLY);
    }

    /**
     * @param int $every
     *
     * @return self
     */
    public function yearly($every = 1)
    {
        /* @noinspection PhpUnhandledExceptionInspection */
        return $this->billEvery($every, BillingPeriod::YEARLY);
    }

    /**
     * @return $this
     */
    public function billEvery(int $interval, string $period)
    {
        if (!\in_array($period, BillingPeriod::PERIOD)) {
            throw new \Exception("Invalid period [{$interval}] in " . static::class);
        }
        $this->billing_interval = $interval;
        $this->billing_period = $period;

        return $this;
    }
}
