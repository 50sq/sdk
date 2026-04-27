<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Auth;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class CheckAuthRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/auth/check';
    }
}
