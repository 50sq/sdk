<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Favorites;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ToggleMediaFavoriteRequest extends Request
{
    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $galleryUid,
        private readonly string $mediaUid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/galleries/'.$this->galleryUid.'/media/'.$this->mediaUid.'/favorite';
    }
}
