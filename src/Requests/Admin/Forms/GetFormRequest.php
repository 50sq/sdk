<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Forms;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetFormRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/admin/forms/{$this->uid}";
    }
}
