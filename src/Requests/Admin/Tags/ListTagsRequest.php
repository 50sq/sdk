<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Tags;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListTagsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/admin/tags';
    }
}
