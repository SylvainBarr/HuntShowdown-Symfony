<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230722120442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tool (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, price INT NOT NULL, damage_per_tick INT DEFAULT NULL, effect_radius INT DEFAULT NULL, effect_duration INT DEFAULT NULL, melee_damage INT DEFAULT NULL, heavy_melee_damage INT DEFAULT NULL, throw_range INT DEFAULT NULL, sighted_range INT DEFAULT NULL, spread INT DEFAULT NULL, stamina_consumption_light INT DEFAULT NULL, stamina_consumption_heavy INT DEFAULT NULL, stamina_consumption_throw INT DEFAULT NULL, vertical_recoil INT DEFAULT NULL, sway INT DEFAULT NULL, reload_speed DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tool');
    }
}
