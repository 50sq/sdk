<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Downloads;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class DownloadMediaRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $galleryUid,
        private readonly string $mediaUid,
        private readonly array $data = [],
    ) {}

    public function resolveEndpoint(): string
    {
        return '/galleries/'.$this->galleryUid.'/media/'.$this->mediaUid.'/download';
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
