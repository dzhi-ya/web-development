<?php

declare(strict_types=1);

namespace App\Core\Product\Factory;

use App\Core\Product\Document\Product;

class ProductFactory
{
    public function create(
        string $title,
        string $description,
        string $image,
        string $price,
        string $place_date,
        string $category,
        string $city,
        string $type,
        string $user
    ): Product {
        $product = new Product(
            $title,
            $description,
            $image,
            $price,
            $place_date,
            $category,
            $city,
            $type,
            $user
        );

        return $product;
    }
}
