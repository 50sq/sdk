<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Portfolio;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class ReorderSectionsRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly array $sections,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/portfolio/sections/reorder';
    }

    protected function defaultBody(): array
    {
        return [
            'sections' => $this->sections,
        ];
    }
}
