<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Portfolio;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPageRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/portfolio/pages/'.$this->uid;
    }
}
