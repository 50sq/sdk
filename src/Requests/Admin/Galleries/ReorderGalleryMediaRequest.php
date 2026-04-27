<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Galleries;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class ReorderGalleryMediaRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $uid,
        private readonly array $media,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/galleries/'.$this->uid.'/reorder-media';
    }

    protected function defaultBody(): array
    {
        return [
            'media' => $this->media,
        ];
    }
}
