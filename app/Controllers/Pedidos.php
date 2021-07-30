<?php

namespace App\Controllers;
use App\Models\Mpedidos;

class Pedidos extends BaseController
{
    public function index()
    {
      # code...
    //  $mensaje = session('mensaje');
      $data = array(
    						 'title' => 'Pedidos'

    						 );
      echo view('Headers/Head', $data);
        echo view('Pedidos/Vpedido');
          echo view('Footers/Foot');
    }

    public function Agregarpedido()
    {
        # code...
        $data = array(
      						 'title' => 'Agregar Pedido'
      						 );
        echo view('Headers/Head' ,$data);
		      echo view('Pedidos/Vaddpedido');
		        echo view('Footers/Foot');
    }

    public function Insertar()
    {
      // code...
      //print_r($_POST);
      $data = [
        'codigo_embarque' => $this->request->getPost('codigo_embarque'),
        'sello_cliente' => $this->request->getPost('sello_cliente'),
        'aeropuerto_destino' => $this->request->getPost('aeropuerto_destino'),
        'ejecutivo' => $this->request->getPost('ejecutivo'),
        'variedad' => $this->request->getPost('variedad'),
        'marca' => $this->request->getPost('marca'),
        'etiqueta' => $this->request->getPost('etiqueta'),
        'tipo_caja' => $this->request->getPost('tipo_caja'),
        'capuchon' => $this->request->getPost('capuchon'),
        'fondo' => $this->request->getPost('fondo'),
        'termografo' => $this->request->getPost('termografo'),
        'funda' => $this->request->getPost('funda')
      ];

      $Modelo = new Mpedidos();
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
        return redirect()->to(base_url('/Pedidos'));
      } else {
        // code...
        return redirect()->to(base_url('/Pedidos'))->with('mensaje','0');
      }


    }
    public function Leer()
    {
      // code...
    }
    public function Actualizar()
    {
      // code...
    }
    public function Eliminar()
    {
      // code...
    }
}
