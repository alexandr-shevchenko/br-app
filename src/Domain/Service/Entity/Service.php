<?php

declare(strict_types=1);

namespace App\Domain\Service\Entity;

use Ramsey\Uuid\Uuid;

class Service
{
    private Uuid $id;
    private string $title;

    public function __construct(Uuid $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
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
    public function getTitle(): string
    {
        return $this->title;
    }
}
