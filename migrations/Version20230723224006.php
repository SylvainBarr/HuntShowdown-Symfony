<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230723224006 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ammo_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE weapon ADD ammo_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE weapon ADD CONSTRAINT FK_6933A7E620874E05 FOREIGN KEY (ammo_type_id) REFERENCES ammo_type (id)');
        $this->addSql('CREATE INDEX IDX_6933A7E620874E05 ON weapon (ammo_type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE weapon DROP FOREIGN KEY FK_6933A7E620874E05');
        $this->addSql('DROP TABLE ammo_type');
        $this->addSql('DROP INDEX IDX_6933A7E620874E05 ON weapon');
        $this->addSql('ALTER TABLE weapon DROP ammo_type_id');
    }
}
