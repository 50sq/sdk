<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Carbon\CarbonImmutable;
use FiftySq\Sdk\Enums\InternalOrderStatus;
use FiftySq\Sdk\Enums\OrderStatus;
use FiftySq\Sdk\Enums\RegionEnum;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Lazy;

class OrderData extends Data
{
    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly string $uid,
        public readonly ?string $number,
        public readonly string $currency,
        public readonly OrderStatus $status,
        public readonly InternalOrderStatus $internal_status,
        public readonly ?RegionEnum $province,
        public readonly bool $completed,
        public readonly int $total,
        public readonly int $subtotal,
        public readonly int $total_shipping,
        public readonly int $total_service_fee,
        public readonly int $total_processing_fee,
        public readonly int $total_discount,
        public readonly int $total_savings,
        public readonly int $total_tax,
        public readonly int $total_items,
        public readonly ?array $taxes,
        public readonly CarbonImmutable $created_at,
        public readonly CarbonImmutable $updated_at,
        public readonly ?CarbonImmutable $paid_at = null,
        public readonly ?string $invoice_pdf = null,
        #[DataCollectionOf(OrderItemData::class)]
        public readonly ?DataCollection $items = null,
        public readonly Lazy|UserData|null $user = null,
        public readonly Lazy|UserData|null $assigned = null,
        public readonly Lazy|ClientData|null $client = null,
        public readonly Lazy|ExternalAccountData|null $account = null,
        public readonly Lazy|GalleryData|null $gallery = null,
        public readonly Lazy|AddressData|null $shipping_address = null,
        public readonly Lazy|AddressData|null $mailing_address = null,
    ) {}
}
