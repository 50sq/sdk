<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Forms;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListFormsRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly ?string $search = null,
        private readonly ?int $page = null,
        private readonly ?int $perPage = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/forms';
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'q' => $this->search,
            'page' => $this->page,
            'per_page' => $this->perPage,
        ]);
    }
}
