<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Downloads;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetDownloadOptionsRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $galleryUid,
        private readonly string $mediaUid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/galleries/'.$this->galleryUid.'/media/'.$this->mediaUid.'/download/options';
    }
}
