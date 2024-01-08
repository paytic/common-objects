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
     * A failed recurring payment will be temporarily listed as ‘past due.’
     * The customer’s credit card is automatically retried up to three times based on scheduled preferences.
     * The payment status will stay listed as ‘past due’ until a successful payment is made.
     */
    public const PASTDUE = 'pastdue';

    /**
     * The subscription is unpaid.
     * If all payment attempts fail, the recurring payment will be marked as Unpaid
     */
    public const UNPAID = 'unpaid';

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
        self::PASTDUE,
        self::UNPAID,
    ];
    public const STATUSES_CHARGEABLE = [
        self::PENDING,
        self::PASTDUE,
        self::ACTIVE,
    ];
}
