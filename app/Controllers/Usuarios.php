<?php

namespace App\Controllers;
use App\Models\Musuarios;

class Usuarios extends BaseController
{
    public function index()
    {
      $Modelo = new Musuarios();
      $data = array(
    						 'title' => 'Usuarios',
                 'listarusuarios' => $Modelo->listarusuarios()
    						 );
      echo view('Headers/Head', $data);
        echo view('Usuarios/Vusuarios');
    }

    public function AgregarUsuario()
    {
      // code...
      $data = array(
    						 'title' => 'Agregar usuario'
    						 );
      echo view('Headers/Head', $data);
        echo view('Usuarios/VaddUsuarios');
    }

    public function Insertar()
    {
      // code...
        $data = [
          'type' => $this->request->getPost('type'),
          'usuario' => $this->request->getPost('usuario'),
          'password' => sha1($this->request->getPost('password'))
        ];

        $Modelo = new Musuarios();
        $datos= $Modelo->insertar_datos($data);

        if ($datos > 0) {
          // code...
          $session = session();
          $session->setFlashdata('mensaje', '
          <script type="text/javascript">
          $(document).ready(function(){
            Swal.fire(
              "Buen trabajo!",
              "se guardo con exito!",
              "success")
            });
            </script>
          ');
          return redirect()->to(base_url('/Usuarios'));
        } else {
          // code...
          $session = session();
          $session->setFlashdata('mensaje', '
          <script type="text/javascript">
          $(document).ready(function(){
            Swal.fire(
              "Disculpa!",
              "Algo salio mal llame al encargado!",
              "error")
            });
            </script>
          ');
          return redirect()->to(base_url('/Usuarios'));
        }

    }

    public function Obtenerusuario($id_usuario)
    {
      // code...
      $data = [
        'id_usuario' => $id_usuario
      ];

      $Modelo = new Musuarios();
      $respuesta = $Modelo->usuariobtener($data);

      $datos = [
        'datos' => $respuesta,
        'title' => 'Editar Usuario'
      ];

      echo view('Headers/Head' ,$datos);
        echo view('Usuarios/Vupdateusuario' ,$datos);


    }
    public function Actualizar()
    {
      // code...
      $id = $this->request->getPost('id_usuario');
      $data = [
        'type' => $this->request->getPost('type'),
        'usuario' => $this->request->getPost('usuario'),
        'password' => $this->request->getPost('password')
      ];

      $Modelo = new Musuarios();
      $datos= $Modelo->Actualizarusuario($data,$id);

      if ($datos) {
        // code...
        $session = session();
        $session->setFlashdata('mensaje', '
        <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            "Buen trabajo!",
            "se actualizo con exito!",
            "success")
          });
          </script>
        ');
        return redirect()->to(base_url('/Usuarios'));
      } else {
        // code...
        $session = session();
        $session->setFlashdata('mensaje', '
        <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            "Disculpa!",
            "Algo salio mal llame al encargado!",
            "error")
          });
          </script>
        ');
        return redirect()->to(base_url('/Usuarios'));
      }


    }
    public function Eliminar($id_usuario)
    {
      // code...
      $data = [
        'id_usuario' => $id_usuario
      ];
      $Modelo = new Musuarios();
      $datos= $Modelo->Eliminarusuario($data);

      if ($datos) {
        // code...
        $session = session();
        $session->setFlashdata('mensaje', '
        <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            "Buen trabajo!",
            "se elimino con exito!",
            "success")
          });
          </script>
        ');
        return redirect()->to(base_url('/Usuarios'));
      } else {
        // code...
        $session = session();
        $session->setFlashdata('mensaje', '
        <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            "Disculpa!",
            "Algo salio mal llame al encargado!",
            "error")
          });
          </script>
        ');
        return redirect()->to(base_url('/Usuarios'));
      }
    }


}
