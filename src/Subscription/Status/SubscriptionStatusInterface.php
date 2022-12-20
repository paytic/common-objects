<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Subscription\Status;

interface SubscriptionStatusInterface
{
    /**
     * The subscription is pending to start in the future.
     */
    public const PENDING = 'pending';

    /**
     * The subscription is active.
     */
    public const ACTIVE = 'active';

    /**
     * The subscription is canceled.
     */
    public const CANCELED = 'canceled';

    /**
     * The subscription is deactivated.
     * This is automaticly when the subscription cannot be executed for varius reasons.
     */
    public const DEACTIVATED = 'deactivated';

    /**
     * The subscription is paused.
     */
    public const PAUSED = 'paused';

    public const STATUSES = [
        self::PENDING,
        self::ACTIVE,
        self::CANCELED,
        self::DEACTIVATED,
        self::PAUSED,
    ];
    public const STATUSES_CHARGEABLE = [
       self::PENDING,
       self::ACTIVE,
    ];
}
