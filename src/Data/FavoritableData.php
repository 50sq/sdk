<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class FavoritableData extends Data
{
    public function __construct(
        public readonly string $id,
        public readonly string $uid,
        public readonly string $type,
        public readonly string $name,
        public readonly ?string $description = null,
        public readonly ?MediaImagesData $images = null,
    ) {}
}
