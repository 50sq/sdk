<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Carbon\CarbonInterface;
use FiftySq\Sdk\Enums\RoleType;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class ClientUserData extends Data
{
    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly string $uid,
        public readonly string $name,
        public readonly string $first_name,
        public readonly string $last_name,
        public readonly string $email,
        public readonly ?string $avatar,
        public readonly ?CarbonInterface $email_verified_at,
        public readonly bool $is_primary,
        public readonly RoleType $role,
    ) {}
}
