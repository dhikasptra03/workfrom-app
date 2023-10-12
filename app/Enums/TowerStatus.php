<?php

namespace App\Enums;

enum TowerStatus: string
{
    case Pending = 'pending';
    case Available = 'available';
    case Unavailable = 'unavailable';
}
