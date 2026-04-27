<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Team;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListTeamRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/admin/team';
    }
}
