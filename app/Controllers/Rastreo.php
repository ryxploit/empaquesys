<?php

namespace App\Controllers;
use App\Models\Mrastreos;

class Rastreo extends BaseController
{
    public function index()
    {
      # code...
        $Modelo = new Mrastreos();
      $data = array(
    						 'title' => 'Hoja de rastreo',
                 'listarhrastreo' => $Modelo->listarhrastreo()
    						 );
      echo view('Headers/Head', $data);
  echo view('Rastreo/Vhrastreo',$data);
  echo view('Footers/Foot');
    }

    public function Agregarhrastreo()
    {
        # code...
        $Modelo = new Mrastreos();
        $data = array(
      						 'title' => 'Agregar Hoja de rastreo',
                   'listarpedidos' => $Modelo->listarpedidos()
      						 );
        echo view('Headers/Head', $data);
		echo view('Rastreo/Vaddhrastreo',$data);
		echo view('Footers/Foot');
    }

    public function Agregarpallet()
    {
        # code...
        $data = array(
      						 'title' => 'Agregar Pallet a Hoja de rastreo'
      						 );
        echo view('Headers/Head', $data);
		echo view('Rastreo/Vaddpallet');
		echo view('Footers/Foot');
    }

    public function Insertarhrastreo()
    {
      // code...


        $data = [
          'fecha' => $this->request->getPost('fecha'),
          'codigo' => $this->request->getPost('codigo'),
          'sello' => $this->request->getPost('sello'),
          'capuchon' => $this->request->getPost('capuchon'),
          'fondo' => $this->request->getPost('fondo'),
          'malla' => $this->request->getPost('malla'),
          'termografo' => $this->request->getPost('termografo'),
          'destino' => $this->request->getPost('destino')
        ];

        $Modelo = new Mrastreos();
        $datos= $Modelo->insertar_datos_hrastreo($data);

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
          return redirect()->to(base_url('/Rastreo'));
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
          return redirect()->to(base_url('/Rastreo'));
        }

    }

    public function Obtenerhrastreo($id_rastreo)
    {
      // code...
      $data = [
        'id_rastreo' => $id_rastreo
      ];

      $Modelo = new Mrastreos();
      $respuesta = $Modelo->rastreoobtener($data);

      $datos = [
        'dato' => $respuesta,
        'title' => 'Modificar Pallets',
        'listarpedidos' => $Modelo->listarpedidos()

      ];

      echo view('Headers/Head' ,$datos);
        echo view('Rastreo/Vupdaterastreo',$datos);
          echo view('Footers/Foot');

    }

    public function Actualizarhrastreo()
    {
      // code...

      $id = $this->request->getPost('id_rastreo');
        $data = [
          'fecha' => $this->request->getPost('fecha'),
          'codigo' => $this->request->getPost('codigo'),
          'sello' => $this->request->getPost('sello'),
          'capuchon' => $this->request->getPost('capuchon'),
          'fondo' => $this->request->getPost('fondo'),
          'malla' => $this->request->getPost('malla'),
          'termografo' => $this->request->getPost('termografo'),
          'destino' => $this->request->getPost('destino')
        ];

        $Modelo = new Mrastreos();
        $datos= $Modelo->Actualizar_data_hrastreo($data,$id);

        if ($datos > 0) {
          // code...
          $session = session();
          $session->setFlashdata('mensaje', '
          <script type="text/javascript">
          $(document).ready(function(){
            Swal.fire(
              "Buen trabajo!",
              "se modifico con exito!",
              "success")
            });
            </script>
          ');
          return redirect()->to(base_url('/Rastreo'));
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
          return redirect()->to(base_url('/Rastreo'));
        }

    }

    public function Eliminarhrastreo($id_rastreo)
    {
      // code...
      $data = [
        'id_rastreo' => $id_rastreo
      ];
      $Modelo = new Mrastreos();
      $datos= $Modelo->Eliminar_data_hrastreo($data);

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
        return redirect()->to(base_url('/Rastreo'));

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
        return redirect()->to(base_url('/Rastreo'));


      }
    }



    public function Obtenerrastreo($id_rastreo)
    {
      // code...
      $data = [
        'id_rastreo' => $id_rastreo
      ];

      $Modelo = new Mrastreos();
      $respuesta = $Modelo->rastreoobtener($data);
      $respuestaPallet =  $Modelo->listarpallet($data);
      $datos = [
        'dato' => $respuesta,
        'title' => 'Agregar Pallets',
        'listarlotes' => $Modelo->listarlotes(),
        'listarpallet' => $respuestaPallet
      ];

      echo view('Headers/Head' ,$datos);
        echo view('Rastreo/Vaddpallet',$datos);
          echo view('Footers/Foot');

    }

    public function Insertarpallet()
    {
      // code...
      $id_rastreo = $this->request->getPost('id_rastreo');

        $data = [
          'fecha' => $this->request->getPost('fecha'),
          'variedad' => $this->request->getPost('variedad'),
          'marca' => $this->request->getPost('marca'),
          'pallet' => $this->request->getPost('pallet'),
          'tamaño' => $this->request->getPost('tamaño'),
          'hidrotermico' => $this->request->getPost('hidrotermico'),
          'total' => $this->request->getPost('total'),
          'folio' => $this->request->getPost('folio'),
          'rastreo' => $this->request->getPost('rastreo'),
          'codigo_rastreo' => $this->request->getPost('codigo_rastreo')
        ];

        $Modelo = new Mrastreos();
        $datos= $Modelo->insertar_datos_pallet($data);


          // code...
          $session = session();
          $session->setFlashdata('mensaje', '
          <script type="text/javascript">
          $(document).ready(function(){
            Swal.fire(
              "Buen trabajo!",
              "se agrego con exito el pallet!",
              "success")
            });
            </script>
          ');
    }

    public function EliminarPallet($id_pallet)
    {
      // code...
      $data = [
        'id_pallet' => $id_pallet
      ];
      $Modelo = new Mrastreos();
      $datos= $Modelo->EliminarPallet($data);

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

      }
    }

    public function Obtenerpallet($id_pallet)
    {
      // code...

      $data = [
        'id_pallet' => $id_pallet
      ];
      $Modelo = new Mrastreos();
      $respuesta = $Modelo->Palletobtener($data);
      echo json_encode($respuesta);

      }

      public function Actualizarpallet()
      {
        // code...
        $id = $this->request->getPost('id_pallet');

          $data = [
            'fecha' => $this->request->getPost('fecha'),
            'variedad' => $this->request->getPost('variedad'),
            'marca' => $this->request->getPost('marca'),
            'pallet' => $this->request->getPost('pallet'),
            'tamaño' => $this->request->getPost('tamaño'),
            'hidrotermico' => $this->request->getPost('hidrotermico'),
            'total' => $this->request->getPost('total'),
            'folio' => $this->request->getPost('folio'),
            'rastreo' => $this->request->getPost('rastreo')
          ];

          $Modelo = new Mrastreos();
          $datos= $Modelo->Actualizar_data_pallet($data,$id);

          print_r($_POST);
            // code...
            if ($data) {
              // code...
              $session = session();
              $session->setFlashdata('mensaje', '
              <script type="text/javascript">
              $(document).ready(function(){
                Swal.fire(
                  "Buen trabajo!",
                  "se modifico con exito el pallet!",
                  "success")
                });
                </script>
              ');

            }

      }


}
