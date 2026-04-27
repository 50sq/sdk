<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Auth;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class VerifyOtpRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $email,
        private readonly string $otp,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/auth/login/otp';
    }

    protected function defaultBody(): array
    {
        return [
            'email' => $this->email,
            'otp' => $this->otp,
        ];
    }
}
