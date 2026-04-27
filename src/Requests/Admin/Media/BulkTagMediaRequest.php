<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Media;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class BulkTagMediaRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly array $mediaIds,
        private readonly array $tagIds,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/media/bulk-tag';
    }

    protected function defaultBody(): array
    {
        return [
            'media_ids' => $this->mediaIds,
            'tag_ids' => $this->tagIds,
        ];
    }
}
