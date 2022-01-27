<?php


use Phinx\Seed\AbstractSeed;

class PessoaSeeder extends AbstractSeed
{
    public function run()
    {
      $now = (new DateTimeImmutable())->format('Y-m-d H:i:s');

      $data = [
        [
            'name' => 'GazinCred',
            'cnpj' => '06932442000152',
            'idtipopessoa' => 2,
            'idtipocontribuinte' => 2,
            'created_at' => $now
        ],
        [
            'name' => 'Gazin Varejo',
            'cnpj' => '97584890000168',
            'idtipopessoa' => 2,
            'idtipocontribuinte' => 3,
            'created_at' => $now
        ],
        [
            'name' => 'Gazin Atacado',
            'cnpj' => '02016794000107',
            'idtipopessoa' => 2,
            'idtipocontribuinte' => 3,
            'created_at' => $now
        ],
      ];

      $pessoas = $this->table('pessoa');
      $pessoas->insert($data)
          ->saveData();
    }
}
