<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Albums;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListAlbumsRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly ?int $perPage = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/albums';
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'per_page' => $this->perPage,
        ]);
    }
}
