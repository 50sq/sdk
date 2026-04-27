<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Media;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteMediaRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/media/'.$this->uid;
    }
}
