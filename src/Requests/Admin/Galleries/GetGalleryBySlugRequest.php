<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Galleries;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetGalleryBySlugRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $slug,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/galleries/slug/'.$this->slug;
    }
}
