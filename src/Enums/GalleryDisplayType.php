<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum GalleryDisplayType: string
{
    case Grid = 'grid';
    case Column = 'column';
    case Masonry = 'masonry';
}
