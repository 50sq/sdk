<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum CartStatus: string
{
    case Incomplete = 'incomplete';
    case PaymentFailed = 'payment_failed';
}
