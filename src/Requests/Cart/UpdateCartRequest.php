<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Cart;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateCartRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        private readonly string $galleryUid,
        private readonly array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/galleries/'.$this->galleryUid.'/cart';
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
