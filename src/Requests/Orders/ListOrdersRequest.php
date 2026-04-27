<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListOrdersRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/orders';
    }
}
