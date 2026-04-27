<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Albums;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAlbumRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $albumUid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/albums/'.$this->albumUid;
    }
}
