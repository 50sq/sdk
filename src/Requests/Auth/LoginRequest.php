<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Auth;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class LoginRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $email,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/auth/login';
    }

    protected function defaultBody(): array
    {
        return [
            'email' => $this->email,
        ];
    }
}
