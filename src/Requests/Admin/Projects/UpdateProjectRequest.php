<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Projects;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateProjectRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        private readonly string $uid,
        private readonly array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/projects/'.$this->uid;
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
