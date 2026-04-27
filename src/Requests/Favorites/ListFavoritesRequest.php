<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Favorites;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListFavoritesRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly ?int $limit = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/favorites';
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
        ]);
    }
}
