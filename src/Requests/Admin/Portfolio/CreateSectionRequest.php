<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Portfolio;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateSectionRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $type,
        private readonly string $pageUid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/portfolio/sections';
    }

    protected function defaultBody(): array
    {
        return [
            'type' => $this->type,
            'page_uid' => $this->pageUid,
        ];
    }
}
