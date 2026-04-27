<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Media;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class BulkDeleteMediaRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly array $mediaIds,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/media/bulk-delete';
    }

    protected function defaultBody(): array
    {
        return [
            'media_ids' => $this->mediaIds,
        ];
    }
}
