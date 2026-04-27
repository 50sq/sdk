<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Albums;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateAlbumRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/albums';
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
