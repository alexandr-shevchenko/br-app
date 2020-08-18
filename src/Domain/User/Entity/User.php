<?php

declare(strict_types=1);

namespace App\Domain\User\Entity;

use Ramsey\Uuid\Uuid;

class User
{
    private Uuid $id;
    private string $name;
    private string $email;

    public function __construct(Uuid $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * @return Uuid
     */
    public function getId(): Uuid
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}