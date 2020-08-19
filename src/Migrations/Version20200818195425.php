<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200818195425 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE astrologer_services (astrologer_id UUID NOT NULL, astrologer_service_id UUID NOT NULL, price NUMERIC(12, 2) NOT NULL, PRIMARY KEY(astrologer_id, astrologer_service_id))');
        $this->addSql('CREATE INDEX IDX_9BF9FF7B56F716EE ON astrologer_services (astrologer_id)');
        $this->addSql('CREATE INDEX IDX_9BF9FF7B6A196C86 ON astrologer_services (astrologer_service_id)');
        $this->addSql('COMMENT ON COLUMN astrologer_services.astrologer_id IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN astrologer_services.astrologer_service_id IS \'(DC2Type:uuid)\'');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP TABLE astrologer_services');
    }
}
