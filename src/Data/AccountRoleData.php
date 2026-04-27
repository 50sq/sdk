<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Enums\RoleType;
use FiftySq\Sdk\Support\Data\DataResource;
use Spatie\LaravelData\Lazy;

class AccountRoleData extends DataResource
{
    public static array $authorizations = ['view', 'update'];

    public function __construct(
        public readonly string $id,
        public readonly string $uid,
        public readonly string $name,
        public readonly ?string $avatar,
        public readonly string $email,
        public readonly string $first_name,
        public readonly string $last_name,
        public readonly string $account,
        public readonly bool $owner,
        public readonly RoleType $role,
        public readonly string $role_name,
        public Lazy|array $authorization,
    ) {}
}
