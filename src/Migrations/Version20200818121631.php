<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200818121631 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'aaa60177-3bd5-4981-9ff0-5752aeba0d43\',
            \'4bc89855-771d-4464-9ab1-a063bc16e41f\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            25
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'ab2a5af0-ae85-4997-940c-6ed05e538084\',
            \'4bc89855-771d-4464-9ab1-a063bc16e41f\',   
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            30
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'dc36fcf9-801d-44fa-b14a-c2e7f8a6bfe8\',
            \'477b3423-965f-48a7-af9c-a9e339cc01ad\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            20
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'95a2fc3a-f2ee-4d17-bc70-6b590c4b3b4d\',
            \'477b3423-965f-48a7-af9c-a9e339cc01ad\',   
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            15
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'83233ccf-f271-4ead-ac91-cf86d49188d6\',
            \'ee9262f4-cf04-49ef-ae15-a52e137f1d7c\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            25
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'0961563b-9d75-4a6b-b090-cf6f42d4d29f\',
            \'ee9262f4-cf04-49ef-ae15-a52e137f1d7c\',   
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            15
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'1d7dd416-7340-454a-af99-d550b29ecaf8\',
            \'ee9262f4-cf04-49ef-ae15-a52e137f1d7c\',   
            \'2a34d33e-659e-41e5-83c6-06b383a2bf22\',
            35
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'bfb86dd0-4468-4541-88a7-5192d16a7326\',
            \'27428a6f-8285-4529-a78d-3ac23bbb6def\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            10
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'59ee564e-efeb-41d7-90d8-ff5a8335225c\',
            \'27428a6f-8285-4529-a78d-3ac23bbb6def\',   
            \'83ff478b-d3e6-4708-a9bc-e25194b14397\',
            15
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'890cdd63-e45e-4374-8d7b-88f7ecc550cf\',
            \'656a5380-860e-4c82-93a8-99464cf912b9\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            20
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'ec2a7fcc-870d-456b-b16c-99a0138bb26c\',
            \'656a5380-860e-4c82-93a8-99464cf912b9\',   
            \'83ff478b-d3e6-4708-a9bc-e25194b14397\',
            35
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'42f2fc04-a3af-4a0d-924f-09c5d8b95cc2\',
            \'fd59a468-cc08-4e24-921f-6fd95d141e57\',   
            \'2a34d33e-659e-41e5-83c6-06b383a2bf22\',
            10
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'7b098e15-4103-4254-8fe2-de37b808bc34\',
            \'fd59a468-cc08-4e24-921f-6fd95d141e57\',   
            \'0db09c4f-9672-46da-bab4-88d8794e5925\',
            15
        )');

        $this->addSql('INSERT INTO astrologer_services (id, astrologer, service, price) VALUES (
            \'d8d09a8b-f1e1-425b-aa25-19ad5cc2e415\',
            \'fd59a468-cc08-4e24-921f-6fd95d141e57\',   
            \'a9a601a7-3bd5-4981-9ff0-5752aeba0d43\',
            20
        )');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'aaa60177-3bd5-4981-9ff0-5752aeba0d43\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'ab2a5af0-ae85-4997-940c-6ed05e538084\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'dc36fcf9-801d-44fa-b14a-c2e7f8a6bfe8\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'95a2fc3a-f2ee-4d17-bc70-6b590c4b3b4d\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'83233ccf-f271-4ead-ac91-cf86d49188d6\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'0961563b-9d75-4a6b-b090-cf6f42d4d29f\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'1d7dd416-7340-454a-af99-d550b29ecaf8\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'bfb86dd0-4468-4541-88a7-5192d16a7326\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'59ee564e-efeb-41d7-90d8-ff5a8335225c\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'890cdd63-e45e-4374-8d7b-88f7ecc550cf\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'ec2a7fcc-870d-456b-b16c-99a0138bb26c\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'42f2fc04-a3af-4a0d-924f-09c5d8b95cc2\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'7b098e15-4103-4254-8fe2-de37b808bc34\'');
        $this->addSql('DELETE FROM astrologer_services WHERE id=\'d8d09a8b-f1e1-425b-aa25-19ad5cc2e415\'');
    }
}
