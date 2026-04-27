<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Galleries;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateGalleryRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/galleries';
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
