<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Galleries;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateGalleryRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        private readonly string $uid,
        private readonly array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/galleries/'.$this->uid;
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
