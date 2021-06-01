<?php

declare(strict_types=1);

namespace App\Core\Product\Enum;

use App\Core\Common\Enum\AbstractEnum;

final class RoleHumanReadable extends AbstractEnum
{
    public const PRODUCT_MANAGER = 'Продакт. Менеджер';
    public const PRODUCT_ADMIN  = 'Продакт. Админ';
}
