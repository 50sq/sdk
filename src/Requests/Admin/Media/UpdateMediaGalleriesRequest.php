<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Media;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateMediaGalleriesRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        private readonly string $uid,
        private readonly array $galleryUids,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/media/'.$this->uid.'/galleries';
    }

    protected function defaultBody(): array
    {
        return [
            'galleries' => $this->galleryUids,
        ];
    }
}
