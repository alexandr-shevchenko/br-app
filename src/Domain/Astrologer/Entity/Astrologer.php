<?php

declare(strict_types=1);

namespace App\Domain\Astrologer\Entity;

use App\Domain\Entity\AstrologerService;
use Doctrine\Common\Collections\ArrayCollection;
use Ramsey\Uuid\Uuid;

class Astrologer
{
    private Uuid $id;
    private string $name;
    private string $photo;
    private string $email;
    private string $description;
    private string $personalInfo;
    private AstrologerService $services;

    public function __construct(
        Uuid $id,
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
    public function getServices(): iterable
    {
        return $this->services;
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
