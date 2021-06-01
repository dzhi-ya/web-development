<?php

declare(strict_types=1);

namespace App\Api\Product\Dto;

class UserResponseDto
{
    public ?string $id;

    public ?string $name;

    public ?string $first_name;

    public ?string $last_name;

    public string $email;

    public ?string $birthdate;

    public ?string $rating;

    public ?string $age;

    public ?string $city_id;

    public ?string $reg_date;

    public ?string $phone;

    public array $roles;
}
