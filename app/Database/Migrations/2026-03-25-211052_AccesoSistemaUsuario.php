<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AccesoSistemaUsuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_acceso_sistema_usuario' => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_usuario' => [
                'type' => 'int',
                'null' => true,
            ],
            'cod_opcion_sistema' => [
                'type' => 'text',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_acceso_sistema_usuario', true);
        $this->forge->createTable('acceso_sistema_usuario');
    }

    public function down()
    {
        $this->forge->dropTable('acceso_sistema_usuario');
    }
}
