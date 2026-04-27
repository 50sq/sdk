<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class PhotoMetadataData extends Data
{
    public function __construct(
        public readonly ?string $camera = null,
        public readonly ?string $lens = null,
        public readonly ?string $dateTaken = null,
        public readonly ?string $createDate = null,
        public readonly ?string $width = null,
        public readonly ?string $height = null,
        public readonly ?string $fileType = null,
        public readonly ?string $fileSize = null,
        public readonly ?string $shutterSpeed = null,
        public readonly ?string $aperture = null,
        public readonly ?string $iso = null,
        public readonly ?string $focalLength = null,
        public readonly ?string $exposureMode = null,
        public readonly ?string $meteringMode = null,
        public readonly ?string $whiteBalance = null,
        public readonly ?string $copyright = null,
        public readonly ?string $make = null,
    ) {}
}
