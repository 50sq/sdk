<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Carbon\CarbonInterface;
use Spatie\LaravelData\Data;

class FavoriteData extends Data
{
    public function __construct(
        public readonly int $id,
        public readonly string $favoritable_type,
        public readonly string $favoritable_id,
        public readonly ?string $parent_type,
        public readonly ?string $parent_id,
        public readonly CarbonInterface $created_at,
        public readonly ?FavoritableData $favoritable = null,
        public readonly ?FavoriteParentData $parent = null,
    ) {}
}
