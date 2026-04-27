<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Team;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ResendInviteRequest extends Request
{
    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $uid,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/team/invites/'.$this->uid.'/resend';
    }
}
