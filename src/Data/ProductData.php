<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Enums\ProductType;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ProductData extends Data
{
    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly string $uid,
        public readonly string $name,
        public readonly string $description,
        public readonly ProductType $type,
        public readonly bool $active,
        public readonly ?string $formatted_price_range,
        public readonly ?string $service_information,
        public readonly bool $once_per_media,
        public readonly ?int $max_price,
        public readonly ?int $min_price,
        public readonly ?int $discounted_at = null,
        #[DataCollectionOf(PriceData::class)]
        public readonly ?DataCollection $prices = null,
    ) {}
}
