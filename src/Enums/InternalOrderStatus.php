<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum InternalOrderStatus: string
{
    case Pending = 'pending';
    case Processing = 'processing';
    case Ready = 'ready';
    case Shipped = 'shipped';
    case Delivered = 'delivered';
}
