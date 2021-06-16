<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210616224229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create file_specification and file_column tables.';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE file_specification (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_fixed_width TINYINT(1) NOT NULL, field_separator VARCHAR(1) NOT NULL, text_separator VARCHAR(1) DEFAULT NULL, has_header TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_3F1EE1F5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE file_column (id INT AUTO_INCREMENT NOT NULL, specification_id INT NOT NULL, position INT NOT NULL, name VARCHAR(255) NOT NULL, start INT DEFAULT NULL, width INT DEFAULT NULL, is_skipped TINYINT(1) NOT NULL, type VARCHAR(255) NOT NULL, marking VARCHAR(1) DEFAULT NULL, change_separator VARCHAR(1) DEFAULT NULL, date_order VARCHAR(3) DEFAULT NULL, date_delimiter VARCHAR(1) DEFAULT NULL, is_four_digit_year TINYINT(1) DEFAULT NULL, has_leading_zeros_in_date TINYINT(1) DEFAULT NULL, date_format VARCHAR(10) DEFAULT NULL, has_three_letter_month TINYINT(1) DEFAULT NULL, time_order VARCHAR(3) DEFAULT NULL, date_time_separator VARCHAR(1) DEFAULT NULL, time_delimiter VARCHAR(1) DEFAULT NULL, is12_hour_format TINYINT(1) DEFAULT NULL, has_meridian TINYINT(1) DEFAULT NULL, meridian_separator VARCHAR(1) DEFAULT NULL, has_leading_zeros_in_hour TINYINT(1) DEFAULT NULL, time_format VARCHAR(10) DEFAULT NULL, INDEX IDX_C544A1C1908E2FFE (specification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE file_column ADD CONSTRAINT FK_C544A1C1908E2FFE FOREIGN KEY (specification_id) REFERENCES file_specification (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE file_column DROP FOREIGN KEY FK_C544A1C1908E2FFE');
        $this->addSql('DROP TABLE file_column');
        $this->addSql('DROP TABLE file_specification');
    }
}
