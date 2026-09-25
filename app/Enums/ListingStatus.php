<?php

namespace App\Enums;

enum ListingStatus: int
{
    case DRAFT = 0;
    case ACTIVE = 1;
    case INACTIVE = 2;
    case HOLD = 3;


}
