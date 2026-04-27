<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Support\Data;

use Spatie\LaravelData\Contracts\BaseData;
use Spatie\LaravelData\Contracts\TransformableData;

interface DataResourceContract extends BaseData, TransformableData
{
    public static function getAuthorizations(): array;
}
