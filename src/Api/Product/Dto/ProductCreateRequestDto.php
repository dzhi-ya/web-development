<?php

declare(strict_types=1);

namespace App\Api\Product\Dto;

use App\Core\Product\Validator\ProductExists;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ProductExists()
 */
class ProductCreateRequestDto
{
    /**
     * @Assert\Length(max=50)
     */
    public ?string $title = null;

    /**
     * @Assert\Length(max=500)
     */
    public ?string $description = null;

    /**
     * @Assert\Length(max=100)
     */
    public ?string $image = null;

    /**
     * @Assert\Length(max=10)
     */
    public ?string $price = null;

    /**
     * @Assert\Length(max=10)
     */
    public ?string $place_date;

    /**
     * @Assert\Length(max=10)
     */
    public ?string $category;

    /**
     * @Assert\Length(max=20)
     */
    public ?string $city;

    /**
     * @Assert\Length(max=10)
     */
    public ?string $type;

    /**
     * @Assert\Length(max=15)
     */
    public ?string $user;

}
