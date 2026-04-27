<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum PaymentGateway: string
{
    case Stripe = 'stripe';
    case Square = 'square';
}
