<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200818195954 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'4bc89855-771d-4464-9ab1-a063bc16e41f\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            25
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'4bc89855-771d-4464-9ab1-a063bc16e41f\',   
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            30
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'477b3423-965f-48a7-af9c-a9e339cc01ad\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            20
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'477b3423-965f-48a7-af9c-a9e339cc01ad\',   
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            15
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'ee9262f4-cf04-49ef-ae15-a52e137f1d7c\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            25
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'ee9262f4-cf04-49ef-ae15-a52e137f1d7c\',   
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            15
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'ee9262f4-cf04-49ef-ae15-a52e137f1d7c\',   
            \'2a34d33e-659e-41e5-83c6-06b383a2bf22\',
            35
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'27428a6f-8285-4529-a78d-3ac23bbb6def\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            10
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'27428a6f-8285-4529-a78d-3ac23bbb6def\',   
            \'83ff478b-d3e6-4708-a9bc-e25194b14397\',
            15
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'656a5380-860e-4c82-93a8-99464cf912b9\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            20
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'656a5380-860e-4c82-93a8-99464cf912b9\',   
            \'83ff478b-d3e6-4708-a9bc-e25194b14397\',
            35
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'fd59a468-cc08-4e24-921f-6fd95d141e57\',   
            \'2a34d33e-659e-41e5-83c6-06b383a2bf22\',
            10
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'fd59a468-cc08-4e24-921f-6fd95d141e57\',   
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            15
        )');

        $this->addSql('INSERT INTO astrologer_services (astrologer_id, astrologer_service_id, price) VALUES (
            \'fd59a468-cc08-4e24-921f-6fd95d141e57\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            20
        )');
    }

    public function down(Schema $schema) : void
    {
    }
}
