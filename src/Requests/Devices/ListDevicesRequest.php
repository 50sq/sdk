<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Devices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListDevicesRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/devices';
    }
}
