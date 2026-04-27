<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Uploads;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class MarkUploadSuccessfulRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $uploadId,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/upload/successful';
    }

    protected function defaultBody(): array
    {
        return [
            'upload_id' => $this->uploadId,
        ];
    }
}
