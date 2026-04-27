<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class FavoriteParentData extends Data
{
    public function __construct(
        public readonly string $id,
        public readonly string $uid,
        public readonly string $type,
        public readonly string $name,
    ) {}
}
