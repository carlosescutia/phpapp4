<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_rol' => 'admin',
                'nom_usuario' => 'Administrador',
                'nom_login' => 'admon',
                'password' => 'hola',
                'activo' => 1
            ],
            [
                'id_rol' => 'mentor',
                'nom_usuario' => 'Pretzel',
                'nom_login' => 'pretzel',
                'password' => 'hola',
                'activo' => 1
            ],
            [
                'id_rol' => 'alumno',
                'nom_usuario' => 'Servando',
                'nom_login' => 'servando',
                'password' => 'hola',
                'activo' => 1
            ],
        ];

        $this->db->table('usuario')->insertBatch($data);
    }
}
