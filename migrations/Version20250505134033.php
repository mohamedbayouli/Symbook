<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250505134033 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_livre (id INT AUTO_INCREMENT NOT NULL, commande_id INT DEFAULT NULL, livre_id INT DEFAULT NULL, quantite INT NOT NULL, INDEX IDX_950B905A82EA2E54 (commande_id), INDEX IDX_950B905A37D925CB (livre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_livre ADD CONSTRAINT FK_950B905A82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE commande_livre ADD CONSTRAINT FK_950B905A37D925CB FOREIGN KEY (livre_id) REFERENCES livre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_livre DROP FOREIGN KEY FK_950B905A82EA2E54');
        $this->addSql('ALTER TABLE commande_livre DROP FOREIGN KEY FK_950B905A37D925CB');
        $this->addSql('DROP TABLE commande_livre');
    }
}
