<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200818121550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO services (id, title) VALUES (
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            \'Natal Chart\'    
        )');
        $this->addSql('INSERT INTO services (id, title) VALUES (
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            \'Detailed Horoscope\'    
        )');
        $this->addSql('INSERT INTO services (id, title) VALUES (
            \'2a34d33e-659e-41e5-83c6-06b383a2bf22\',
            \'Horoscope Compatibility\'    
        )');
        $this->addSql('INSERT INTO services (id, title) VALUES (
            \'83ff478b-d3e6-4708-a9bc-e25194b14397\',
            \'Yearly Horoscope\'    
        )');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM services WHERE id=\'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\'');
        $this->addSql('DELETE FROM services WHERE id=\'0db09c4f-9672-46da-bab4-88d8794e5925\'');
        $this->addSql('DELETE FROM services WHERE id=\'2a34d33e-659e-41e5-83c6-06b383a2bf22\'');
        $this->addSql('DELETE FROM services WHERE id=\'83ff478b-d3e6-4708-a9bc-e25194b14397\'');
    }
}
