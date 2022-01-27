<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PessoaTable extends AbstractMigration
{

    public function change(): void
    {
      $players = $this->table('pessoa');

      $players->addColumn('name', 'string', ['limit' => 60])
          ->addColumn('cnpj', 'string', ['limit' => 14])
          ->addColumn('idtipopessoa', 'integer')
          ->addColumn('idtipocontribuinte', 'integer') 
          ->addColumn('created_at', 'datetime', ['null' => true])
          ->addColumn('ended_at', 'datetime', ['null' => true])         
          ->create();
    }
}
