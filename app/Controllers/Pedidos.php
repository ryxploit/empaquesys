<?php

namespace App\Controllers;
use App\Models\Mpedidos;
use Fpdf\Fpdf;



class Pedidos extends BaseController
{
    public function index()
    {
      # code...
      $Modelo = new Mpedidos();
      $data = array(
    						 'title' => 'Pedidos',
                 'listarpedidos' => $Modelo->listarpedidos()
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
          'malla' => $this->request->getPost('malla')
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
          return redirect()->to(base_url('/Pedidos'));
        }

    }
    public function Obtenerpedido($id_pedidos)
    {
      // code...
      $data = [
        'id_pedidos' => $id_pedidos
      ];

      $Modelo = new Mpedidos();
      $respuesta = $Modelo->Pedidoobtener($data);

      $datos = [
        'datos' => $respuesta,
        'title' => 'Editar Pedido'
      ];

      echo view('Headers/Head' ,$datos);
        echo view('Pedidos/Vupdatepedido' ,$datos);
          echo view('Footers/Foot');

    }
    public function Actualizar()
    {
      // code...
      $id = $this->request->getPost('id_pedidos');
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
        'malla' => $this->request->getPost('malla')
      ];

      $Modelo = new Mpedidos();
      $datos= $Modelo->Actualizarpedido($data,$id);

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
        return redirect()->to(base_url('/Pedidos'));
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
        return redirect()->to(base_url('/Pedidos'));
      }


    }
    public function Eliminar($id_pedidos)
    {
      // code...
      $data = [
        'id_pedidos' => $id_pedidos
      ];
      $Modelo = new Mpedidos();
      $datos= $Modelo->Eliminarpedido($data);

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
        return redirect()->to(base_url('/Pedidos'));
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
        return redirect()->to(base_url('/Pedidos'));
      }
    }

    
}