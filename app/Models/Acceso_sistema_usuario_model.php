<?php

namespace App\Models;

use CodeIgniter\Model;

class Acceso_sistema_usuario_model extends Model
{
    protected $table = 'acceso_sistema_usuario';
    protected $primaryKey = 'id_acceso_sistema_usuario';
    protected $allowedFields = [
        'id_acceso_sistema_usuario',
        'id_usuario',
        'cod_opcion_sistema',
    ];

    public function get_acceso_sistema_usuario($id_acceso_sistema_usuario) {
        $sql = 'select * from acceso_sistema_usuario where id_acceso_sistema_usuario = ?';
        $query = $this->db->query($sql, array($id_acceso_sistema_usuario));
        return $query->getRowArray();
    }


    public function get_accesos_sistema_usuario($id_usuario) {
        // solo accesos del usuario
        $sql = "select asu.id_usuario, asu.id_acceso_sistema_usuario, asu.cod_opcion_sistema, ops.nom_opcion_sistema from acceso_sistema_usuario asu left join opcion_sistema ops on asu.cod_opcion_sistema = ops.cod_opcion_sistema where id_usuario = ?";
        $query = $this->db->query($sql, array($id_usuario));
        return $query->getResultArray();
    }

    public function get_usuarios_acceso($id_opcion_sistema) {
        // Devuelve usuarios con acceso a una opción
        $sql = 'select asu.id_usuario, u.nom_usuario, c.nom_comunidad from acceso_sistema_usuario asu left join opcion_sistema ops on ops.cod_opcion_sistema = asu.cod_opcion_sistema left join usuario u on u.id_usuario = asu.id_usuario left join comunidad c on c.id_comunidad = u.id_comunidad where ops.id_opcion_sistema = ? ;';
        $query = $this->db->query($sql, array($id_opcion_sistema));
        return $query->getResultArray();
    }

}
