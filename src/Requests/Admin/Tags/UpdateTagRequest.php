<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Tags;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateTagRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        private readonly string $tag,
        private readonly string $name,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/tags/'.$this->tag;
    }

    protected function defaultBody(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
