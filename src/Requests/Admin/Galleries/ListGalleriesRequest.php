<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Galleries;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListGalleriesRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly ?string $search = null,
        private readonly ?string $status = null,
        private readonly ?string $type = null,
        private readonly ?string $visibility = null,
        private readonly ?string $sortBy = null,
        private readonly ?string $sortDirection = null,
        private readonly ?int $perPage = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/galleries';
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'search' => $this->search,
            'status' => $this->status,
            'type' => $this->type,
            'visibility' => $this->visibility,
            'sort_by' => $this->sortBy,
            'sort_direction' => $this->sortDirection,
            'per_page' => $this->perPage,
        ]);
    }
}
