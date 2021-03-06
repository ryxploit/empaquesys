<?php

namespace App\Controllers;

use App\Models\Mlogin;

class Login extends BaseController {

    public function index() {
        $mensaje = session('mensaje');
        echo view('Login/Vlogin', ['mensaje' => $mensaje]);
    }

    public function session() {
        // code...
        $usuario = $this->request->getPost('usuario');
        $password = sha1($this->request->getPost('password'));

        $Modelo = new Mlogin();
        $data = array(
            'usuario' => $usuario,
            'password' => $password
        );

        $datosUsuario = $Modelo->session_data($data);

        if (count($datosUsuario) > 0) {
            // code...
            $data = [
                "usuario" => $datosUsuario[0]['usuario'],
                "type" => $datosUsuario[0]['type']
            ];

            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/Home'))->with('mensaje', '1');
        } else {
            // code...
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }

    public function destroy_session() {
        // code...
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

}
