<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Carbon\CarbonInterface;
use Spatie\LaravelData\Data;

class TagData extends Data
{
    public function __construct(
        public string $id,
        public string $name,
        public string $slug,
        public ?int $taggables_count = null,
        public ?CarbonInterface $created_at = null,
    ) {}
}
