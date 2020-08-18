<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200818121518 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO astrologers (
            id,
            name,
            photo,
            email,
            description,
            personal_info
            ) VALUES (
            \'4bc89855-771d-4464-9ab1-a063bc16e41f\',
            \'Lucy\',
            \'https://image.shutterstock.com/image-photo/romantic-beauty-retro-style-600w-98003021.jpg\',
            \'lucy@gmail.com\',
            \'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don look even slightly believable.\',
            \'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.\'
        );');

        $this->addSql('INSERT INTO astrologers (
            id,
            name,
            photo,
            email,
            description,
            personal_info
            ) VALUES (
            \'477b3423-965f-48a7-af9c-a9e339cc01ad\',
            \'Ken\',
            \'https://image.shutterstock.com/image-photo/handsome-young-elegant-man-grey-600w-1138982840.jpg\',
            \'ken@gmail.com\',
            \'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..\',
            \'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'
        );');

        $this->addSql('INSERT INTO astrologers (
            id,
            name,
            photo,
            email,
            description,
            personal_info
            ) VALUES (
            \'ee9262f4-cf04-49ef-ae15-a52e137f1d7c\',
            \'Barbara\',
            \'https://image.shutterstock.com/image-photo/portrait-smiling-young-woman-600w-9661507.jpg\',
            \'barbara@gmail.com\',
            \'The majority have suffered alteration in some form, by injected humour, or randomised words which don look even slightly believable.\',
            \'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.\'
        );');

        $this->addSql('INSERT INTO astrologers (
            id,
            name,
            photo,
            email,
            description,
            personal_info
            ) VALUES (
            \'27428a6f-8285-4529-a78d-3ac23bbb6def\',
            \'Kevin\',
            \'https://image.shutterstock.com/image-photo/elegant-young-handsome-serious-man-600w-269601806.jpg\',
            \'kevin@gmail.com\',
            \'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..\',
            \'If you are going to use a passage of Lorem Ipsum, you need to be sure there is anything embarrassing hidden in the middle of text.\'
        );');

        $this->addSql('INSERT INTO astrologers (
            id,
            name,
            photo,
            email,
            description,
            personal_info
            ) VALUES (
            \'656a5380-860e-4c82-93a8-99464cf912b9\',
            \'Susan\',
            \'https://image.shutterstock.com/image-photo/portrait-happy-young-woman-face-260nw-105446003.jpg\',
            \'susan@gmail.com\',
            \'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.\',
            \'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.\'
        );');

        $this->addSql('INSERT INTO astrologers (
            id,
            name,
            photo,
            email,
            description,
            personal_info
            ) VALUES (
            \'fd59a468-cc08-4e24-921f-6fd95d141e57\',
            \'Emma\',
            \'https://image.shutterstock.com/image-photo/portrait-black-haired-woman-pretty-260nw-112475261.jpg\',
            \'emma@gmail.com\',
            \'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.\',
            \'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.\'
        );');

    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM astrologers WHERE id=\'4bc89855-771d-4464-9ab1-a063bc16e41f\'');
        $this->addSql('DELETE FROM astrologers WHERE id=\'477b3423-965f-48a7-af9c-a9e339cc01ad\'');
        $this->addSql('DELETE FROM astrologers WHERE id=\'ee9262f4-cf04-49ef-ae15-a52e137f1d7c\'');
        $this->addSql('DELETE FROM astrologers WHERE id=\'27428a6f-8285-4529-a78d-3ac23bbb6def\'');
        $this->addSql('DELETE FROM astrologers WHERE id=\'656a5380-860e-4c82-93a8-99464cf912b9\'');
        $this->addSql('DELETE FROM astrologers WHERE id=\'fd59a468-cc08-4e24-921f-6fd95d141e57\'');
    }
}
