<?php

namespace App\Libraries;

class Funciones_sistema {

    protected $session;

    public function __construct()
    {
        $this->session = service('session');
        $this->acceso_sistema_model = model('Acceso_sistema_model');
        $this->parametro_sistema_model = model('Parametro_sistema_model');
        $this->bitacora_model = model('Bitacora_model');
    }

    public function get_userdata()
    {
        $data['userdata'] = $this->session->get();
        $id_usuario = $data['userdata']['id_usuario'];

        $data['permisos_usuario'] = explode(',', $this->acceso_sistema_model->get_permisos_usuario($id_usuario));

        return $data;
    }

    public function get_system_params()
    {
        $data['anio'] = $this->parametro_sistema_model->get_parametro_sistema_nom('anio');

        return $data;
    }

    public function registro_bitacora($accion, $entidad, $valor)
    {
        // registro en bitacora
        $data['userdata'] = $this->session->get();
        $nom_login = $data['userdata']['nom_login'];
        $nom_usuario = $data['userdata']['nom_usuario'];

        $data = array(
            'fecha' => date("Y-m-d"),
            'hora' => date("H:i"),
            'origen' => $_SERVER['REMOTE_ADDR'],
            'nom_login' => $nom_login,
            'nom_usuario' => $nom_usuario,
            'accion' => $accion,
            'entidad' => $entidad,
            'valor' => $valor
        );
        $this->bitacora_model->save($data);
    }

}
