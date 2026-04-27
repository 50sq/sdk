<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Support\Data\DataResource;

class ExternalMediaData extends DataResource
{
    public static array $authorizations = ['download', 'purchased', 'viewWithoutWatermark', 'accessOriginalMedia'];

    public function __construct(
        public readonly ?string $id,
        public readonly ?string $uid,
        public readonly string $file_name,
        public readonly string $file_original_name,
        public readonly string $file_size,
        public readonly ?string $formatted_file_size,
        public readonly ?string $description,
        public readonly bool $processed,
        public readonly bool $favorited,
        public readonly MediaImagesData $images,
        public readonly ?MediaMetadataData $metadata = null,
        public readonly ?int $display_width = null,
        public readonly ?int $display_height = null,
    ) {}
}
