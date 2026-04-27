<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Account;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAccountRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/admin/account';
    }
}
