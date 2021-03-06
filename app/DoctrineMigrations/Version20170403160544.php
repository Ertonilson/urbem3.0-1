<?php

namespace Application\Migrations;

use Urbem\CoreBundle\Helper\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170403160544 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');
        $this->insertRoute('urbem_tributario_imobiliario_nivel_filtro', 'Nível', 'tributario_imobiliario_hierarquia_home');
        $this->insertRoute('urbem_tributario_imobiliario_nivel_list', 'Nível', 'tributario_imobiliario_hierarquia_home');
        $this->insertRoute('urbem_tributario_imobiliario_nivel_create', 'Incluir', 'urbem_tributario_imobiliario_nivel_list');
        $this->insertRoute('urbem_tributario_imobiliario_nivel_edit', 'Alterar', 'urbem_tributario_imobiliario_nivel_list');
        $this->insertRoute('urbem_tributario_imobiliario_nivel_delete', 'Excluir', 'urbem_tributario_imobiliario_nivel_list');
        $this->insertRoute('urbem_tributario_imobiliario_nivel_show', 'Detalhe', 'urbem_tributario_imobiliario_nivel_list');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');
    }
}
