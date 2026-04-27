<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetOrderRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/orders/'.$this->uid;
    }
}
