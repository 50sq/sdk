<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class MediaImageData extends Data
{
    public function __construct(
        public readonly ?string $url,
    ) {}
}
