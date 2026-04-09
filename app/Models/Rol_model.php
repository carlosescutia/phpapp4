<?php

namespace App\Models;

use CodeIgniter\Model;

class Rol_model extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'id_rol';
    protected $allowedFields = [
        'id_rol',
        'nom_rol',
    ];

    public function get_roles()
    {
        $sql = ""
            ."select "
            ."r.* "
            ."from "
            ."rol r "
            ."";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    public function get_rol($id_rol)
    {
        $sql = ""
            ."select "
            ."u.* "
            ."from "
            ."rol u "
            ."where "
            ."u.id_rol = ? "
            ."";
        $query = $this->db->query($sql, array($id_rol));
        return $query->getRowArray();
    }

}
