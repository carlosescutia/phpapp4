<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_rol' => [
                'type' => 'text',
                'null' => true,
            ],
            'nom_usuario' => [
                'type' => 'text',
                'null' => true,
            ],
            'nom_login' => [
                'type' => 'text',
                'null' => true,
            ],
            'password' => [
                'type' => 'text',
                'null' => true,
            ],
            'activo' => [
                'type' => 'int',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
