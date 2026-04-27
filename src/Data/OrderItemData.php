<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Enums\InternalOrderStatus;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class OrderItemData extends Data
{
    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly string $uid,
        public readonly int $quantity,
        public readonly InternalOrderStatus $status,
        public readonly ProductData $product,
        public readonly string $product_id,
        public readonly ?string $purchase_id,
        public readonly ?string $purchase_type,
        public readonly PriceData $price,
        public readonly string $price_id,
        public readonly string $service_information,
        public readonly int $unit_amount,
        public readonly int $regular_price = 0,
        public readonly int $your_price = 0,
        public readonly int $total_savings = 0,
        public readonly int $total_discount = 0,
        public readonly int $total_tax = 0,
        public readonly int $subtotal = 0,
        public readonly int $total = 0,
        public readonly array $taxes = [],
        public readonly bool $once_per_media = false,
        public readonly ?ExternalMediaData $media = null,
        public readonly ?string $gallery_name = null,
        public readonly ?int $gallery_media_count = null,
        public readonly ?string $gallery_cover_url = null,
    ) {}
}
