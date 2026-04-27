<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Cart;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCartRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $galleryUid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/galleries/'.$this->galleryUid.'/cart';
    }
}
