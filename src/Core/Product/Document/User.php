<?php

declare(strict_types=1);

namespace App\Core\Product\Document;

use App\Core\Common\Document\AbstractDocument;
use App\Core\Product\Enum\Role;
use App\Core\Product\Enum\UserStatus;
use App\Core\Product\Repository\UserRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @MongoDB\Document(repositoryClass=UserRepository::class, collection="yo_users")
 */
class User extends AbstractDocument implements UserInterface
{
    /**
     * @MongoDB\Id
     */
    protected ?string $id = null;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $first_name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $last_name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected string $email;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $birthdate = null;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $rating = null;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $age = null;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $city_id = null;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $reg_date = null;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $phone = null;

    /**
     * @var string[]
     *
     * @MongoDB\Field(type="collection")
     */
    protected array $roles = [];

    public function __construct(
        string $name,
        string $first_name,
        string $last_name,
        string $email,
        string $birthdate,
        string $rating,
        string $age,
        string $city_id,
        string $reg_date,
        string $phone,
        array $roles
    ) {

        $this->name = $name;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->rating = $rating;
        $this->age = $age;
        $this->city_id = $city_id;
        $this->reg_date = $reg_date;
        $this->phone = $phone;

        array_map([$this, 'addRole'], $roles);

        $this->addDefaultRole();
    }


    /**
     * @return array<string>
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array<string> $roles
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;

        $this->addDefaultRole();
    }

    public function addRole(string $role): void
    {
        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }
    }


    public function getId(): ?string
    {
        return $this->id;
    }


    public function setId(?string $id): void
    {
        $this->id = $id;
    }


    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(?string $name): void
    {
        $this->name = $name;
    }


    public function getFirstName(): ?string
    {
        return $this->first_name;
    }


    public function setFirstName(?string $first_name): void
    {
        $this->first_name = $first_name;
    }


    public function getLastName(): ?string
    {
        return $this->last_name;
    }


    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }


    public function setBirthdate(?string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }


    public function getRating(): ?string
    {
        return $this->rating;
    }


    public function setRating(?string $rating): void
    {
        $this->rating = $rating;
    }


    public function getAge(): ?string
    {
        return $this->age;
    }


    public function setAge(?string $age): void
    {
        $this->age = $age;
    }


    public function getCityId(): ?string
    {
        return $this->city_id;
    }


    public function setCityId(?string $city_id): void
    {
        $this->city_id = $city_id;
    }


    public function getRegDate(): ?string
    {
        return $this->reg_date;
    }


    public function setRegDate(?string $reg_date): void
    {
        $this->reg_date = $reg_date;
    }


    public function getPhone(): ?string
    {
        return $this->phone;
    }


    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    private function addDefaultRole(): void
    {
        $this->addRole(Role::USER);
    }

    public function getPassword(): string
    {
        return $this->phone;
    }

    public function getSalt(): string
    {
        return md5($this->name);
    }

    public function getUsername(): string
    {
        return $this->name;
    }

    public function eraseCredentials(): void
    {
    }
}
