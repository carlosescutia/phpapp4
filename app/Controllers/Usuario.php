<?php

namespace App\Controllers;

class Usuario extends BaseController
{
    public function __construct()
    {
        $this->usuario_model = model('Usuario_model');
    }

    public function index()
    {
        $data = [];
        $data += $this->fn_sis->get_userdata();
        $data += $this->fn_sis->get_system_params();

        $data['usuarios'] = $this->usuario_model->get_usuarios();

        return view('templates/header')
            .view('usuario/lista', $data)
            .view('templates/footer');
    }

    public function detalle($id_usuario)
    {
        $data = [];
        $data += $this->fn_sis->get_userdata();
        $data += $this->fn_sis->get_system_params();

        $data['usuario'] = $this->usuario_model->get_usuario($id_usuario);

        return view('templates/header')
            .view('usuario/detalle', $data)
            .view('templates/footer');
    }
}

