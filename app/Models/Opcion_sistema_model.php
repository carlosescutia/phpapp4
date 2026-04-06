<?php

namespace App\Models;

use CodeIgniter\Model;

class Opcion_sistema_model extends Model
{
    protected $table = 'opcion_sistema';
    protected $primaryKey = 'id_opcion_sistema';
    protected $allowedFields = [
        'id_opcion_sistema',
        'cod_opcion_sistema',
        'nom_opcion_sistema',
        'otorgable',
    ];

    public function get_opciones_sistema() {
        $sql = 'select * from opcion_sistema order by cod_opcion_sistema;';
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    public function get_opciones_sistema_otorgables() {
        $sql = 'select * from opcion_sistema where otorgable = 1 order by cod_opcion_sistema;';
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    public function get_opcion_sistema($id_opcion_sistema) {
        $sql = 'select * from opcion_sistema where id_opcion_sistema = ?;';
        $query = $this->db->query($sql, array($id_opcion_sistema));
        return $query->getRowArray();
    }

    public function get_opcion_sistema_codigo($cod_opcion_sistema) {
        $sql = 'select * from opcion_sistema where cod_opcion_sistema = ?;';
        $query = $this->db->query($sql, array($cod_opcion_sistema));
        return $query->getRowArray();
    }

}
