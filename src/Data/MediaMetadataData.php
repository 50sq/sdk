<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class MediaMetadataData extends Data
{
    public function __construct(
        public readonly ?string $make = null,
        public readonly ?string $model = null,
        public readonly ?string $lens = null,
        public readonly ?string $captured = null,
        public readonly ?string $exposure = null,
        public readonly ?string $iso = null,
        public readonly ?string $aperture = null,
        public readonly ?string $focalLength = null,
        public readonly ?string $copyrights = null,
    ) {}
}
