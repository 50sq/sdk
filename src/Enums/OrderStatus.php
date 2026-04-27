<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum OrderStatus: string
{
    case Paid = 'paid';
    case Complete = 'complete';
    case Cancelled = 'cancelled';
    case Refunded = 'refunded';
    case Incomplete = 'incomplete';
}
