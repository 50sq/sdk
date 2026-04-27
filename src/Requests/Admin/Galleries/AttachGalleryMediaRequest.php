<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Galleries;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class AttachGalleryMediaRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $uid,
        private readonly array $mediaIds,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/galleries/'.$this->uid.'/media';
    }

    protected function defaultBody(): array
    {
        return [
            'media_ids' => $this->mediaIds,
        ];
    }
}
