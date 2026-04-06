<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccesoSistemaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_rol' => 'admin',
                'cod_opcion_sistema' => 'reportes.can_view',
            ],
            [
                'id_rol' => 'admin',
                'cod_opcion_sistema' => 'reportes_administrador.can_view',
            ],
            [
                'id_rol' => 'admin',
                'cod_opcion_sistema' => 'catalogos.can_view',
            ],
            [
                'id_rol' => 'admin',
                'cod_opcion_sistema' => 'opcion_sistema.can_edit',
            ],
            [
                'id_rol' => 'admin',
                'cod_opcion_sistema' => 'acceso_sistema.can_edit',
            ],
            [
                'id_rol' => 'admin',
                'cod_opcion_sistema' => 'acceso_sistema_usuario.can_edit',
            ],
            [
                'id_rol' => 'admin',
                'cod_opcion_sistema' => 'usuario.can_edit',
            ],
            [
                'id_rol' => 'admin',
                'cod_opcion_sistema' => 'parametro_sistema.can_edit',
            ],
            [
                'id_rol' => 'mentor',
                'cod_opcion_sistema' => 'reportes.can_view',
            ],
            [
                'id_rol' => 'mentor',
                'cod_opcion_sistema' => 'reportes_mentor.can_view',
            ],
            [
                'id_rol' => 'alumno',
                'cod_opcion_sistema' => 'reportes.can_view',
            ],
            [
                'id_rol' => 'alumno',
                'cod_opcion_sistema' => 'reportes_alumno.can_view',
            ],
        ];

        $this->db->table('acceso_sistema')->insertBatch($data);
    }
}
