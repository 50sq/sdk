<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Enums\GalleryDisplayMode;
use FiftySq\Sdk\Enums\GalleryDisplayType;
use Spatie\LaravelData\Data;

class GalleryOptionsData extends Data
{
    public function __construct(
        public readonly bool $allow_downloads = false,
        public readonly bool $allow_originals_download = false,
        public readonly bool $enable_full_gallery_download = false,
        public readonly bool $require_payment = false,
        public readonly bool $allow_uploads = false,
        public readonly bool $watermark = false,
        public readonly bool $show_metadata = false,
        public readonly GalleryDisplayMode $display_mode = GalleryDisplayMode::System,
        public readonly GalleryDisplayType $display_type = GalleryDisplayType::Grid,
        public readonly bool $store_enabled = false,
        public readonly bool $shipping_enabled = false,
        public readonly bool $allow_gallery_purchase = false,
        public readonly bool $instant_download_after_purchase = false,
        public readonly bool $allow_favorites = false,
        public readonly bool $allow_comments = false,
        public readonly ?string $auto_sort_by = null,
    ) {}
}
