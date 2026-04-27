<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Portfolio;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class ReorderItemsRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly array $items,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/portfolio/items/reorder';
    }

    protected function defaultBody(): array
    {
        return [
            'items' => $this->items,
        ];
    }
}
