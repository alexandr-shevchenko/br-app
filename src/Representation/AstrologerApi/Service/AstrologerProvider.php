<?php

declare(strict_types=1);

namespace App\Representation\AstrologerApi\Service;

use App\Domain\Astrologer\Entity\Astrologer;
use App\Domain\Astrologer\Repository\AstrologerRepository;

class AstrologerProvider
{
    private AstrologerRepository $astrologerRepository;

    public function __construct(AstrologerRepository $astrologerRepository)
    {
        $this->astrologerRepository = $astrologerRepository;
    }

    /**
     * @return Astrologer[]
     */
    public function getAstrologers(): iterable
    {
        $this->astrologerRepository->findAll();
    }
}