<?php

declare(strict_types=1);

namespace App\Core\Product\Enum;

use App\Core\Common\Enum\AbstractEnum;

class Role extends AbstractEnum
{
    public const DEVELOPER  = 'ROLE_DEVELOPER';
    public const MANAGER  = 'ROLE_MANAGER';
    public const USER  = 'ROLE_USER';
}
