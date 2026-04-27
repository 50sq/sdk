<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Accounts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAccountFeedRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/account/feed';
    }
}
