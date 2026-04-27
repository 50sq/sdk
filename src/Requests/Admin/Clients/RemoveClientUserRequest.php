<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Clients;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class RemoveClientUserRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(
        private readonly string $uid,
        private readonly string $userUid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/clients/'.$this->uid.'/users/'.$this->userUid;
    }
}
