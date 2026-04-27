<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Galleries;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetGalleryMediaRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $galleryUid,
        private readonly ?int $limit = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/galleries/'.$this->galleryUid.'/media';
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
        ]);
    }
}
