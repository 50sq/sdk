<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Portfolio;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class ToggleSectionRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/portfolio/sections/'.$this->uid.'/toggle';
    }

    protected function defaultBody(): array
    {
        return [];
    }
}
