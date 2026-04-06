<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bitacora extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_evento' => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'fecha' => [
                'type' => 'date',
                'null' => true,
            ],
            'hora' => [
                'type' => 'time',
                'null' => true,
            ],
            'origen' => [
                'type' => 'text',
                'null' => true,
            ],
            'nom_login' => [
                'type' => 'text',
                'null' => true,
            ],
            'nom_usuario' => [
                'type' => 'text',
                'null' => true,
            ],
            'accion' => [
                'type' => 'text',
                'null' => true,
            ],
            'entidad' => [
                'type' => 'text',
                'null' => true,
            ],
            'valor' => [
                'type' => 'text',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_evento', true);
        $this->forge->createTable('bitacora');
    }

    public function down()
    {
        $this->forge->dropTable('bitacora');
    }
}
