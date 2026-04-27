<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class MediaImagesData extends Data
{
    public function __construct(
        public readonly MediaImageData $public,
        public readonly MediaImageData $watermarked,
        public readonly ?MediaImageData $small = null,
        public readonly ?MediaImageData $original = null,
        public readonly ?MediaImageData $download = null,
    ) {}
}
