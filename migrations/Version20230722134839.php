<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230722134839 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE consumable (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, damage_thrown INT DEFAULT NULL, image_url VARCHAR(255) DEFAULT NULL, effect_radius INT DEFAULT NULL, throw_range INT DEFAULT NULL, control_range INT DEFAULT NULL, fuse_timer INT DEFAULT NULL, damage INT DEFAULT NULL, effect_duration INT DEFAULT NULL, melee_damage INT DEFAULT NULL, heavy_melee_damage INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE legendary_weapon_skin (id INT AUTO_INCREMENT NOT NULL, weapon_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, image_url VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_BE313DCA95B82273 (weapon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE legendary_weapon_skin ADD CONSTRAINT FK_BE313DCA95B82273 FOREIGN KEY (weapon_id) REFERENCES weapon (id)');
        $this->addSql('ALTER TABLE tool ADD damage_thrown INT DEFAULT NULL, ADD muzzle_velocity INT DEFAULT NULL, ADD fuze_timer INT DEFAULT NULL, ADD damage INT DEFAULT NULL, ADD image_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE weapon ADD image_url VARCHAR(255) DEFAULT NULL, ADD description LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE legendary_weapon_skin DROP FOREIGN KEY FK_BE313DCA95B82273');
        $this->addSql('DROP TABLE consumable');
        $this->addSql('DROP TABLE legendary_weapon_skin');
        $this->addSql('ALTER TABLE tool DROP damage_thrown, DROP muzzle_velocity, DROP fuze_timer, DROP damage, DROP image_url');
        $this->addSql('ALTER TABLE weapon DROP image_url, DROP description');
    }
}
