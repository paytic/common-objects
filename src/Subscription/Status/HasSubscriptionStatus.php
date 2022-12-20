<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Subscription\Status;

trait HasSubscriptionStatus
{
    public ?string $status = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }
}
