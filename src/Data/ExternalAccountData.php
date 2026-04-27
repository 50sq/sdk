<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class ExternalAccountData extends Data
{
    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly string $uid,
        public readonly string $name,
        public readonly string $slug,
        public readonly ?string $avatar = null,
    ) {}
}
