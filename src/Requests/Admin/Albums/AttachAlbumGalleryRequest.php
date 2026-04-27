<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Albums;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class AttachAlbumGalleryRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $uid,
        private readonly array $galleryIds,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/albums/'.$this->uid.'/galleries/attach';
    }

    protected function defaultBody(): array
    {
        return [
            'gallery_ids' => $this->galleryIds,
        ];
    }
}
