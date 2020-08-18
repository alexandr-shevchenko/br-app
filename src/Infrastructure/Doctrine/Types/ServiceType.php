<?php

declare(strict_types=1);

namespace App\Infrastructure\Doctrine\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class ServiceType extends Type
{
    /**
     * @param array $fieldDeclaration
     * @param AbstractPlatform $platform
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        return $platform->getVarcharTypeDeclarationSQL($fieldDeclaration);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'service';
    }
}