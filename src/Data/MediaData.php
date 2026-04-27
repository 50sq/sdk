<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class MediaData extends Data
{
    public function __construct(
        public readonly string $id,
        public readonly string $uid,
        public readonly string $file_name,
        public readonly string $file_original_name,
        public readonly int $file_size,
        public readonly ?string $formatted_file_size,
        public readonly ?string $description,
        public readonly bool $processed,
        public readonly bool $favorited,
        public readonly MediaImagesData $images,
        public readonly ?PhotoMetadataData $metadata = null,
    ) {}
}
