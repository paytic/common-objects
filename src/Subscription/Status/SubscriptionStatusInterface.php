<?php

namespace Paytic\CommonObjects\Subscription\Status;

interface SubscriptionStatusInterface
{
    /**
     * The subscription is pending to start in the future.
     */
    public const PENDING = 'PENDING';

    /**
     * The subscription is active.
     */
    public const ACTIVE = 'ACTIVE';

    /**
     * The subscription is canceled.
     */
    public const CANCELED = 'CANCELED';

    /**
     * The subscription is deactivated.
     * This is automaticly when the subscription cannot be executed for varius reasons
     */
    public const DEACTIVATED = 'DEACTIVATED';

    /**
     * The subscription is paused.
     */
    public const PAUSED = 'PAUSED';

    const STATUSES = [
        self::PENDING,
        self::ACTIVE,
        self::CANCELED,
        self::DEACTIVATED,
    ];

}