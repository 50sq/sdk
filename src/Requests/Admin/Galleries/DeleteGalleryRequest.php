<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Galleries;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteGalleryRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/galleries/'.$this->uid;
    }
}
