<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250110140713 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP CONSTRAINT fk_67f068bc61220ea6');
        $this->addSql('DROP INDEX idx_67f068bc61220ea6');
        $this->addSql('ALTER TABLE commentaire ADD user_uid UUID DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire RENAME COLUMN creator_id TO tutoriel_id');
        $this->addSql('COMMENT ON COLUMN commentaire.user_uid IS \'(DC2Type:uuid)\'');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCB88D678D FOREIGN KEY (user_uid) REFERENCES "user" (uid) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC7CB6CDBB FOREIGN KEY (tutoriel_id) REFERENCES tutoriel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_67F068BCB88D678D ON commentaire (user_uid)');
        $this->addSql('CREATE INDEX IDX_67F068BC7CB6CDBB ON commentaire (tutoriel_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE commentaire DROP CONSTRAINT FK_67F068BCB88D678D');
        $this->addSql('ALTER TABLE commentaire DROP CONSTRAINT FK_67F068BC7CB6CDBB');
        $this->addSql('DROP INDEX IDX_67F068BCB88D678D');
        $this->addSql('DROP INDEX IDX_67F068BC7CB6CDBB');
        $this->addSql('ALTER TABLE commentaire DROP user_uid');
        $this->addSql('ALTER TABLE commentaire RENAME COLUMN tutoriel_id TO creator_id');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_67f068bc61220ea6 FOREIGN KEY (creator_id) REFERENCES tutoriel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_67f068bc61220ea6 ON commentaire (creator_id)');
    }
}
