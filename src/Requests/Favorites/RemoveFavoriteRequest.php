<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Favorites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class RemoveFavoriteRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function __construct(
        private readonly array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/favorite';
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
