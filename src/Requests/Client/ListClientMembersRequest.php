<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Client;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListClientMembersRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/client/members';
    }
}
