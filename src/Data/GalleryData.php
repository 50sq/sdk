<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Carbon\CarbonImmutable;
use FiftySq\Sdk\Enums\Visibility;
use FiftySq\Sdk\Support\Data\DataResource;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Lazy;

class GalleryData extends DataResource
{
    public static array $authorizations = ['download', 'viewWithoutWatermark', 'accessOriginalMedia'];

    public function __construct(
        public readonly string $id,
        public readonly string $uid,
        public readonly string $account_id,
        public readonly string $name,
        public readonly ?string $slug,
        public readonly ?string $url,
        public readonly ?string $description,
        public readonly Visibility $visibility,
        public readonly ?string $cover_image_id,
        public readonly int $media_count,
        public readonly bool $favorited,
        public readonly CarbonImmutable $created_at,
        public readonly GalleryOptionsData $options,
        public readonly Lazy|Collection $media,
        public readonly Lazy|ExternalAccountData $account,
    ) {}
}
