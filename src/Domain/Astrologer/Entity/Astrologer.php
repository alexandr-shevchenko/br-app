<?php

declare(strict_types=1);

namespace App\Domain\Astrologer\Entity;

use App\Domain\AstrologerService\Entity\AstrologerService;
use Doctrine\Common\Collections\ArrayCollection;
use Ramsey\Uuid\UuidInterface;

class Astrologer
{
    private UuidInterface $id;
    private string $name;
    private string $photo;
    private string $email;
    private string $description;
    private string $personalInfo;
    private ArrayCollection $services;

    public function __construct(
        UuidInterface $id,
        string $name,
        string $photo,
        string $email,
        string $description,
        string $personalInfo
    ){
        $this->id = $id;
        $this->name = $name;
        $this->photo = $photo;
        $this->email = $email;
        $this->description = $description;
        $this->personalInfo = $personalInfo;
        $this->services = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|AstrologerService[]
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
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
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPersonalInfo(): string
    {
        return $this->personalInfo;
    }
}
