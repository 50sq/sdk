<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Tags;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetTaggedModelRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly array $params = [],
    ) {}

    public function resolveEndpoint(): string
    {
        return '/tags/model';
    }

    protected function defaultQuery(): array
    {
        return $this->params;
    }
}
