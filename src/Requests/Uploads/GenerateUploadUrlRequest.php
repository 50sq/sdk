<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Uploads;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class GenerateUploadUrlRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/upload/url';
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
