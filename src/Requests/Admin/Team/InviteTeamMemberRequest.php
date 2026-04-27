<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Team;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class InviteTeamMemberRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly string $email,
        private readonly string $role,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/team/invite';
    }

    protected function defaultBody(): array
    {
        return [
            'email' => $this->email,
            'role' => $this->role,
        ];
    }
}
