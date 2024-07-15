<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230802122123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE unlock_condition (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE weapon ADD unlock_condition_id INT DEFAULT NULL, ADD unlock_rank INT DEFAULT NULL, ADD unlock_description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE weapon ADD CONSTRAINT FK_6933A7E67E02C61B FOREIGN KEY (unlock_condition_id) REFERENCES unlock_condition (id)');
        $this->addSql('CREATE INDEX IDX_6933A7E67E02C61B ON weapon (unlock_condition_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE weapon DROP FOREIGN KEY FK_6933A7E67E02C61B');
        $this->addSql('DROP TABLE unlock_condition');
        $this->addSql('DROP INDEX IDX_6933A7E67E02C61B ON weapon');
        $this->addSql('ALTER TABLE weapon DROP unlock_condition_id, DROP unlock_rank, DROP unlock_description');
    }
}
