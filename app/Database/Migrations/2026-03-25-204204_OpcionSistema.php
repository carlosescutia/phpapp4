<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OpcionSistema extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_opcion_sistema' => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'cod_opcion_sistema' => [
                'type' => 'text',
                'null' => true,
            ],
            'nom_opcion_sistema' => [
                'type' => 'text',
                'null' => true,
            ],
            'otorgable' => [
                'type' => 'int',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id_opcion_sistema', true);
        $this->forge->createTable('opcion_sistema');
    }

    public function down()
    {
        $this->forge->dropTable('opcion_sistema');
    }
}
