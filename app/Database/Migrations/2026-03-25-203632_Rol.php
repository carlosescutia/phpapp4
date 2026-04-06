<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rol extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rol' => [
                'type' => 'text',
                'null' => false,
            ],
            'nom_rol' => [
                'type' => 'text',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_rol', true);
        $this->forge->createTable('rol');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
