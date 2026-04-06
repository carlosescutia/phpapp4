<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ParametroSistemaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nom_parametro_sistema' => 'anio',
                'valor' => '2026',
            ],
        ];

        $this->db->table('parametro_sistema')->insertBatch($data);
    }
}
