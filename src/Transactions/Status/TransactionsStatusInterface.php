<?php

namespace Paytic\CommonObjects\Transactions\Status;

/**
 * @inspiration https://github.com/ptuchik/billing/blob/master/src/Constants/TransactionStatus.php
 * @inspiration https://github.com/square/square-php-sdk/blob/337ebfe05eec40e9b74a3556807d4e133faf90fb/src/Models/TenderCardDetailsStatus.php
 * @inspiration https://github.com/DarvinStudio/DarvinPaymentBundle/blob/master/DBAL/Type/PaymentStateType.php
 * @inspiration https://github.com/stripe/stripe-php/blob/master/lib/PaymentIntent.php
 */
interface TransactionsStatusInterface
{
    /**
     * The subscription is pending to start in the future.
     */
    public const PENDING = 'PENDING';

    /**
     * The card transaction failed.
     */
    public const FAILED = 'failed';

    /**
     * The card transaction refunded.
     */
    public const REFUNDED = 'refunded';

    /**
     * The card transaction was authorized and subsequently voided (i.e., canceled).
     */
    public const VOIDED = 'voided';

    public const CANCELED = 'canceled';

    public const SUCCEEDED = 'succeeded';

    const STATUSES = [
        self::PENDING,
        self::FAILED,
        self::REFUNDED,
        self::VOIDED,
        self::CANCELED,
        self::SUCCEEDED,
    ];

}