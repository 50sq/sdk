<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class PriceData extends Data
{
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly ?string $description,
        public readonly int $unit_amount,
        public readonly int $minimum_quantity,
        public readonly int $maximum_quantity,
        public readonly bool $active,
    ) {}
}
