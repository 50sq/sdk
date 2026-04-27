<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Tags;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteTagRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(
        private readonly string $tag,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/tags/'.$this->tag;
    }
}
