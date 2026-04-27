<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Proofs;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListProofsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/proofs';
    }
}
