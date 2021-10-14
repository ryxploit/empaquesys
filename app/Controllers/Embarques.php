<?php

namespace App\Controllers;
use App\Models\Membarques;
use Dompdf\Dompdf;

class Embarques extends BaseController
{
    public function index()
    {
      # code...
      $data = array(
    						 'title' => 'PACKING LIST'
    						 );
      echo view('Headers/Head', $data);
        echo view('Embarques/Vpackinglist');
          echo view('Footers/Foot');
    }

    public function Agregarembarque()
    {
        # code...
        $Modelo = new Membarques();
        $datos=
        $data = array(
      						 'title' => 'Agregar embarque',
                   'listarhembarques'=> $Modelo->listarhembarques()
      						 );
        echo view('Headers/Head', $data);
		      echo view('Embarques/Vaddembarques', $data);

    }

    public function insertarhembarque()
    {
      // code...
      $data = [
        'fecha_embarque' => $this->request->getPost('fecha_embarque'),
        'trailer' => $this->request->getPost('trailer'),
        'caja' => $this->request->getPost('caja'),
        'hora_embarque' => $this->request->getPost('hora_embarque'),
        'chofer' => $this->request->getPost('chofer'),
        'destinatario' => $this->request->getPost('destinatario'),
        'numero_envio' => $this->request->getPost('numero_envio'),
        'observaciones' => $this->request->getPost('observaciones')
      ];

      $Modelo = new Membarques();
      $datos= $Modelo->insertar_hembarque($data);

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
        return redirect()->to(base_url('/Embarques/Agregarembarque'));
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
        return redirect()->to(base_url('/Embarques/Agregarembarque'));
      }

    }

    public function Agregarpallet($id_embarques)
    {
        # code...
        $Modelo = new Membarques();
        $id = [
          'id_embarques' => $id_embarques
        ];
        $respuesta = $Modelo->obtener_embarque($id);
        $data = array(
                   'title' => 'Agregar Pallet',
                   'datos' => $respuesta,
                   'listarpedidos' => $Modelo->listarpedidos(),
                   'listarpallet' => $Modelo->listarpallet($id),
                   'listartotalpallet' => $Modelo->listartotalpallet(),
                   'sumaTotal' => $Modelo->sumarTotalpallet($id)
                   );
        echo view('Headers/Head', $data);
          echo view('Embarques/Vaddpallet', $data);

    }

    public function Actualizar_embarque_pallet()
    {
      // code...
      $id = $this->request->getPost('id_embarques_pallet');

        $data = [
          'pedido' => $this->request->getPost('pedido'),
          'numero_pallet' => $this->request->getPost('numero_pallet'),
          'peso_pallet' => $this->request->getPost('peso_pallet'),
          'marca_caja' => $this->request->getPost('marca_caja'),
          'cantidad' => $this->request->getPost('cantidad'),
          'calibre' => $this->request->getPost('calibre'),
          'hidrotermico' => $this->request->getPost('hidrotermico')

        ];

        $Modelo = new Membarques();
        $datos= $Modelo->Actualizar_data_embarque_pallet($data,$id);

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


    public function Obtener_embarque_pallet($id_embarques_pallet)
    {
      // code...

      $data = [
        'id_embarques_pallet' => $id_embarques_pallet
      ];
      $Modelo = new Membarques();
      $respuesta = $Modelo->Pallet_embarque_obtener($data);
      echo json_encode($respuesta);

      }

    public function Insertarpallet()
    {
      // code...


        $data = [
          'pedido' => $this->request->getPost('pedido'),
          'numero_pallet' => $this->request->getPost('numero_pallet'),
          'peso_pallet' => $this->request->getPost('peso_pallet'),
          'marca_caja' => $this->request->getPost('marca_caja'),
          'cantidad' => $this->request->getPost('cantidad'),
          'calibre' => $this->request->getPost('calibre'),
          'hidrotermico' => $this->request->getPost('hidrotermico'),
          'embarque_id' => $this->request->getPost('embarque_id')

        ];

        $Modelo = new Membarques();
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

    
}
