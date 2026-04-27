<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Albums;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteAlbumRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/albums/'.$this->uid;
    }
}
