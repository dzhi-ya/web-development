<?php

declare(strict_types=1);

namespace App\Api\Product\Factory;

use App\Api\Product\Dto\UserResponseDto;
use App\Api\Product\Dto\ProductResponseDto;
use App\Core\Product\Document\Product;
use App\Core\Product\Document\User;
use App\Core\Product\Enum\Role;
use App\Core\Product\Enum\RoleHumanReadable;
use Symfony\Component\HttpFoundation\Response;

class ResponseFactory
{
    /**
     * @param Product         $product
     * @param User|null $user
     *
     * @return ProductResponseDto
     */
    public function createProductResponse(Product $product, ?User $user = null): ProductResponseDto
    {
        $dto = new ProductResponseDto();

        $dto->id = $product->getId();
        $dto->title = $product->getTitle();
        $dto->description = $product->getDescription();
        $dto->image = $product->getImage();
        $dto->price = $product->getPrice();
        $dto->place_date = $product->getPlaceDate();
        $dto->category = $product->getCategory();
        $dto->city = $product->getCity();
        $dto->type = $product->getType();

        if($user){
            $userResponseDto = new UserResponseDto();
            $userResponseDto->id = $user->getId();
            $userResponseDto->name = $user->getName();
            $userResponseDto->first_name = $user->getFirstName();
            $userResponseDto->last_name = $user->getLastName();
            $userResponseDto->email = $user->getEmail();
            $userResponseDto->birthdate = $user->getBirthdate();
            $userResponseDto->rating = $user->getRating();
            $userResponseDto->age = $user->getAge();
            $userResponseDto->city_id = $user->getCityId();
            $userResponseDto->reg_date = $user->getRegDate();
            $userResponseDto->phone = $user->getPhone();
            $userResponseDto->roles = $user->getRoles();

            $dto->user = $userResponseDto;
        }

        return $dto;
    }

}
