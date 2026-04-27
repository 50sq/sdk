<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Clients;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetClientRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/clients/'.$this->uid;
    }
}
