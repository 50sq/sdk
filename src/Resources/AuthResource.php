<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Auth\CheckAuthRequest;
use FiftySq\Sdk\Requests\Auth\LoginRequest;
use FiftySq\Sdk\Requests\Auth\VerifyOtpRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AuthResource extends BaseResource
{
    public function login(string $email): Response
    {
        return $this->connector->send(new LoginRequest($email));
    }

    public function verifyOtp(string $email, string $otp): Response
    {
        return $this->connector->send(new VerifyOtpRequest($email, $otp));
    }

    public function check(): Response
    {
        return $this->connector->send(new CheckAuthRequest);
    }
}
