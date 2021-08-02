<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210802082314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE news_news_tag (news_id INT NOT NULL, news_tag_id INT NOT NULL, INDEX IDX_F7007BF0B5A459A0 (news_id), INDEX IDX_F7007BF0367BA065 (news_tag_id), PRIMARY KEY(news_id, news_tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE news_news_tag ADD CONSTRAINT FK_F7007BF0B5A459A0 FOREIGN KEY (news_id) REFERENCES news (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE news_news_tag ADD CONSTRAINT FK_F7007BF0367BA065 FOREIGN KEY (news_tag_id) REFERENCES news_tag (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE news_news_tag');
    }
}
