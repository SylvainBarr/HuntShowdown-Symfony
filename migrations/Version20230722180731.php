<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230722180731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE damage_class (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, icon_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE consumable ADD damage_class_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE consumable ADD CONSTRAINT FK_4475F0959883C12E FOREIGN KEY (damage_class_id) REFERENCES damage_class (id)');
        $this->addSql('CREATE INDEX IDX_4475F0959883C12E ON consumable (damage_class_id)');
        $this->addSql('ALTER TABLE tool ADD light_melee_class_id INT DEFAULT NULL, ADD heavy_melee_class_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tool ADD CONSTRAINT FK_20F33ED135594B29 FOREIGN KEY (light_melee_class_id) REFERENCES damage_class (id)');
        $this->addSql('ALTER TABLE tool ADD CONSTRAINT FK_20F33ED1CA3E2F20 FOREIGN KEY (heavy_melee_class_id) REFERENCES damage_class (id)');
        $this->addSql('CREATE INDEX IDX_20F33ED135594B29 ON tool (light_melee_class_id)');
        $this->addSql('CREATE INDEX IDX_20F33ED1CA3E2F20 ON tool (heavy_melee_class_id)');
        $this->addSql('ALTER TABLE weapon ADD light_melee_class_id INT DEFAULT NULL, ADD heavy_melee_class_id INT DEFAULT NULL, DROP light_melee_type, DROP heavy_melee_type');
        $this->addSql('ALTER TABLE weapon ADD CONSTRAINT FK_6933A7E635594B29 FOREIGN KEY (light_melee_class_id) REFERENCES damage_class (id)');
        $this->addSql('ALTER TABLE weapon ADD CONSTRAINT FK_6933A7E6CA3E2F20 FOREIGN KEY (heavy_melee_class_id) REFERENCES damage_class (id)');
        $this->addSql('CREATE INDEX IDX_6933A7E635594B29 ON weapon (light_melee_class_id)');
        $this->addSql('CREATE INDEX IDX_6933A7E6CA3E2F20 ON weapon (heavy_melee_class_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consumable DROP FOREIGN KEY FK_4475F0959883C12E');
        $this->addSql('ALTER TABLE tool DROP FOREIGN KEY FK_20F33ED135594B29');
        $this->addSql('ALTER TABLE tool DROP FOREIGN KEY FK_20F33ED1CA3E2F20');
        $this->addSql('ALTER TABLE weapon DROP FOREIGN KEY FK_6933A7E635594B29');
        $this->addSql('ALTER TABLE weapon DROP FOREIGN KEY FK_6933A7E6CA3E2F20');
        $this->addSql('DROP TABLE damage_class');
        $this->addSql('DROP INDEX IDX_4475F0959883C12E ON consumable');
        $this->addSql('ALTER TABLE consumable DROP damage_class_id');
        $this->addSql('DROP INDEX IDX_20F33ED135594B29 ON tool');
        $this->addSql('DROP INDEX IDX_20F33ED1CA3E2F20 ON tool');
        $this->addSql('ALTER TABLE tool DROP light_melee_class_id, DROP heavy_melee_class_id');
        $this->addSql('DROP INDEX IDX_6933A7E635594B29 ON weapon');
        $this->addSql('DROP INDEX IDX_6933A7E6CA3E2F20 ON weapon');
        $this->addSql('ALTER TABLE weapon ADD light_melee_type VARCHAR(50) DEFAULT NULL, ADD heavy_melee_type VARCHAR(50) DEFAULT NULL, DROP light_melee_class_id, DROP heavy_melee_class_id');
    }
}
