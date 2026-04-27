<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Accounts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAccountRoleRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/account/role';
    }
}
