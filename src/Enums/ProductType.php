<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum ProductType: string
{
    case Download = 'download';
    case Digital = 'digital';
    case Package = 'package';
    case Prints = 'prints';
    case Physical = 'physical';
    case PhysicalGroup = 'physical_group';
    case Service = 'service';
}
