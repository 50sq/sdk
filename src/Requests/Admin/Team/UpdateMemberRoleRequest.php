<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Requests\Admin\Team;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateMemberRoleRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(
        private readonly string $uid,
        private readonly string $role,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/admin/team/members/'.$this->uid.'/role';
    }

    protected function defaultBody(): array
    {
        return [
            'role' => $this->role,
        ];
    }
}
