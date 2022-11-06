<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221106150343 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE balance balance INT UNSIGNED NOT NULL, CHANGE base base INT UNSIGNED NOT NULL, CHANGE self_ratio self_ratio DOUBLE PRECISION UNSIGNED NOT NULL, CHANGE comp_ratio comp_ratio DOUBLE PRECISION UNSIGNED NOT NULL, CHANGE self_month self_month INT UNSIGNED NOT NULL, CHANGE comp_month comp_month INT UNSIGNED NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` CHANGE balance balance INT NOT NULL, CHANGE base base INT NOT NULL, CHANGE self_ratio self_ratio DOUBLE PRECISION NOT NULL, CHANGE comp_ratio comp_ratio DOUBLE PRECISION NOT NULL, CHANGE self_month self_month INT NOT NULL, CHANGE comp_month comp_month INT NOT NULL');
    }
}
