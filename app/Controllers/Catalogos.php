<?php

namespace App\Controllers;

class Catalogos extends BaseController
{
    public function __construct()
    {
        //$this->usuario_model = model('Usuario_model');
    }

    public function index()
    {
        if ($this->session->logueado) {
            $data = [];
            $data += $this->fn_sis->get_userdata();

            return view('templates/header', $data)
                .view('catalogos/lista', $data)
                .view('templates/footer');
        } else {
            return redirect()->to(site_url("login"));
        }
    }

}
