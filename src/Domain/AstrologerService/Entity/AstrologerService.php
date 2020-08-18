<?php

declare(strict_types=1);

namespace App\Domain\AstrologerService\Entity;

use App\Domain\Astrologer\Entity\Astrologer;
use App\Domain\Entity\Service;
use Ramsey\Uuid\Uuid;

class AstrologerService
{
    private Uuid $id;
    private Astrologer $astrologer;
    private Service $service;
    private string $price;

    public function __construct(Uuid $id, Astrologer $astrologer, Service $service, string $price)
    {
        $this->id = $id;
        $this->astrologer = $astrologer;
        $this->service = $service;
        $this->price = $price;
    }

    /**
     * @return Uuid
     */
    public function getId(): Uuid
    {
        return $this->id;
    }

    /**
     * @return Astrologer
     */
    public function getAstrologer(): Astrologer
    {
        return $this->astrologer;
    }

    /**
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }
}
