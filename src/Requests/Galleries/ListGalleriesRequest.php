<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Galleries;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListGalleriesRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/galleries';
    }
}
