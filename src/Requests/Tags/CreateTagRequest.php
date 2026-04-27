<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Tags;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateTagRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $name,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/tags';
    }

    protected function defaultBody(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
