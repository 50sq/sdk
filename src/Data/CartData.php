<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Enums\CartStatus;
use FiftySq\Sdk\Enums\Currency;
use FiftySq\Sdk\Enums\RegionEnum;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Lazy;

class CartData extends Data
{
    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly string $uid,
        public readonly CartStatus $status,
        public readonly ?RegionEnum $province,
        public readonly ?Currency $currency,
        public readonly int $total,
        public readonly int $subtotal,
        public readonly int $total_shipping,
        public readonly int $total_service_fee,
        public readonly int $total_processing_fee,
        public readonly int $total_discount,
        public readonly int $total_savings,
        public readonly int $total_tax,
        public readonly int $total_items,
        public readonly ?array $taxes = null,
        #[DataCollectionOf(CartItemData::class)]
        public readonly ?DataCollection $items = null,
        public readonly Lazy|UserData|null $user = null,
        public readonly Lazy|ClientData|null $client = null,
        public readonly Lazy|ExternalAccountData|null $account = null,
    ) {}
}
