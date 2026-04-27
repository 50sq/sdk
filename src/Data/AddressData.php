<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Carbon\Carbon;
use FiftySq\Sdk\Support\Data\DataResource;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;

class AddressData extends DataResource
{
    public static array $authorizations = ['view', 'update', 'delete'];

    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly string $uid,
        public readonly ?string $parent_type,
        public readonly ?int $parent_id,
        public readonly bool $primary,
        public readonly ?string $address_1,
        public readonly ?string $address_2,
        public readonly ?string $phone,
        public readonly ?string $city,
        public readonly ?string $province,
        public readonly ?string $postal_code,
        public readonly ?string $country,
        #[WithCast(DateTimeInterfaceCast::class)]
        public readonly ?Carbon $deleted_at = null,
        #[WithCast(DateTimeInterfaceCast::class)]
        public readonly ?Carbon $created_at = null,
        #[WithCast(DateTimeInterfaceCast::class)]
        public readonly ?Carbon $updated_at = null,
    ) {}
}
