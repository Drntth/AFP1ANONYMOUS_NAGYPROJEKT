<?php

namespace App\Enums;

enum category_id_enum: string
{
    case CPU = 'CPU';
    case GPU = 'GPU';
    case RAM = 'RAM';
    case Motherboard = 'Motherboard';
    case PSU = 'PSU';
    case Storage = 'Storage';
    case Case = 'Case';
    case Cooling = 'Cooling';
}