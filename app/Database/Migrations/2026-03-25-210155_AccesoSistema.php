<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AccesoSistema extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_acceso_sistema' => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_rol' => [
                'type' => 'text',
                'null' => true,
            ],
            'cod_opcion_sistema' => [
                'type' => 'text',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_acceso_sistema', true);
        $this->forge->createTable('acceso_sistema');
    }

    public function down()
    {
        $this->forge->dropTable('acceso_sistema');
    }
}
