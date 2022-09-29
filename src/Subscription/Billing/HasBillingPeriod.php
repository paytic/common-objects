<?php

namespace Paytic\CommonObjects\Subscription\Billing;

use Exception;

/**
 * Trait ManageBillingCycle
 * @package Paytic\Payments\Subscription\Billing
 */
trait HasBillingPeriod
{
    public int $billing_interval;

    public string $billing_period;

    /**
     * @param int $every
     * @return self
     */
    public function billEveryDay($every = 1)
    {
        return $this->billEvery($every, BillingPeriod::DAILY);
    }

    /**
     * @param int $every
     * @return self
     */
    public function billEveryWeek($every = 1)
    {
        return $this->billEvery($every, BillingPeriod::WEEKLY);
    }

    /**
     * @param int $every
     * @return self
     */
    public function billEveryMonth($every = 1)
    {
        return $this->billEvery($every, BillingPeriod::MONTHLY);
    }

    /**
     * @param int $every
     * @return self
     */
    public function yearly($every = 1)
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        return $this->billEvery($every, BillingPeriod::YEARLY);
    }

    /**
     * @param int $interval
     * @param string $period
     * @return $this
     */
    public function billEvery(int $interval, string $period)
    {
        if (!in_array($period, BillingPeriod::PERIOD)) {
            throw new Exception("Invalid period [{$interval}] in " . get_class($this));
        }
        $this->billing_interval = $interval;
        $this->billing_period = $period;
        return $this;
    }
}
