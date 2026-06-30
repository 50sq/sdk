<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Forms;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class SubmitFormRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  array<string, mixed>  $data
     */
    public function __construct(
        private readonly string $uid,
        private readonly array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/admin/forms/{$this->uid}/submissions";
    }

    protected function defaultBody(): array
    {
        return $this->data;
    }
}
