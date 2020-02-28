<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200219190344 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE personne (id_prs INT AUTO_INCREMENT NOT NULL, id_type_personne INT NOT NULL, nom_prs VARCHAR(255) NOT NULL, prenom_prs VARCHAR(255) NOT NULL, email_prs VARCHAR(255) NOT NULL, mdp_prs VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_FCEC9EF7C193F76 (id_type_personne), PRIMARY KEY(id_prs)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF7C193F76 FOREIGN KEY (id_type_personne) REFERENCES type_personne (id_type_prs)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE personne');
    }
}
