<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ParametroSistema extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_parametro_sistema' => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nom_parametro_sistema' => [
                'type' => 'text',
                'null' => true,
            ],
            'valor' => [
                'type' => 'text',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_parametro_sistema', true);
        $this->forge->createTable('parametro_sistema');
    }

    public function down()
    {
        $this->forge->dropTable('parametro_sistema');
    }
}
