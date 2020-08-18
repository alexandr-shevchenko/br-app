<?php

declare(strict_types=1);

namespace App\Representation\AstrologerApi\Controller;

use App\Representation\AstrologerApi\Service\AstrologerProvider;
use FOS\RestBundle\Controller\Annotations as Rest;

class AstrologerController
{
    private AstrologerProvider $astrologerProvider;

    public function __construct(AstrologerProvider $astrologerProvider)
    {
        $this->astrologerProvider = $astrologerProvider;
    }

    /**
     * @Rest\Get(path="/astrologers")
     */
    public function getAstrologersList(): void
    {
        $astrologers = $this->astrologerProvider->getAstrologers();
    }
}