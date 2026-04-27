<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Galleries;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class GetGalleriesForPortfolioRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly array $galleryUids,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/galleries/portfolio';
    }

    protected function defaultBody(): array
    {
        return [
            'galleries' => $this->galleryUids,
        ];
    }
}
