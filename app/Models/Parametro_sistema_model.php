<?php

namespace App\Models;

use CodeIgniter\Model;

class Parametro_sistema_model extends Model
{
    protected $table = 'parametro_sistema';
    protected $primaryKey = 'id_parametro_sistema';
    protected $allowedFields = [
        'id_parametro_sistema',
        'nom_parametro_sistema',
        'valor',
    ];

    public function get_parametros_sistema() {
        $sql = 'select * from parametro_sistema order by id_parametro_sistema;';
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    public function get_parametro_sistema($id_parametro_sistema) {
        $sql = 'select * from parametro_sistema where id_parametro_sistema = ?;';
        $query = $this->db->query($sql, array($id_parametro_sistema));
        return $query->getRowArray();
    }

    public function get_parametro_sistema_nom($nom_parametro_sistema) {
        $sql = 'select valor from parametro_sistema where nom_parametro_sistema = ?;';
        $query = $this->db->query($sql, array($nom_parametro_sistema));
        return $query->getRowArray()['valor'] ?? null ;
    }

}
