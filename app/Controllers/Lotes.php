<?php

namespace App\Controllers;
use App\Models\Mlotes;

class Lotes extends BaseController
{
    public function index()
    {
      # code...
      $Modelo = new Mlotes();
      $data = array(
    						 'title' => 'Lotes',
                 'listarlotes' => $Modelo->listarlotes()
    						 );
      echo view('Headers/Head', $data);
        echo view('Lotes/Vlotes',$data);

    }

    public function Agregarlote()
    {
        # code...
        $data = array(
      						 'title' => 'Agregar Lote'
      						 );
        echo view('Headers/Head', $data);
		      echo view('Lotes/Vaddlote');

    }

    public function Insertar()
    {
      // code...
        $data = [
          'fecha' => $this->request->getPost('fecha'),
          'corredor' => $this->request->getPost('corredor'),
          'numero_cajas' => $this->request->getPost('numero_cajas'),
          'productor' => $this->request->getPost('productor'),
          'registro' => $this->request->getPost('registro'),
          'folio' => $this->request->getPost('folio'),
          'nombre_huerta' => $this->request->getPost('nombre_huerta'),
          'hidrotermico' => $this->request->getPost('hidrotermico'),
          'ubicacion' => $this->request->getPost('ubicacion'),
          'lote' => $this->request->getPost('lote'),
          'promedio' => $this->request->getPost('promedio'),
          'total' => $this->request->getPost('total'),
          'muestra' => $this->request->getPost('muestra'),
          'numero_cuadrilla' => $this->request->getPost('numero_cuadrilla')
        ];

        $Modelo = new Mlotes();
        $datos= $Modelo->insertar_lote($data);

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
          return redirect()->to(base_url('/Lotes'));
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
          return redirect()->to(base_url('/Lotes'));
        }

    }
    public function Obtenerlote($id_lotes)
    {
      // code...
      $data = [
        'id_lotes' => $id_lotes
      ];

      $Modelo = new Mlotes();
      $respuesta = $Modelo->loteobtener($data);

      $datos = [
        'datos' => $respuesta,
        'title' => 'Editar Lote'
      ];

      echo view('Headers/Head' ,$datos);
        echo view('Lotes/Vupdatelote' ,$datos);
        

    }
    public function Actualizar()
    {
      // code...
      $id = $this->request->getPost('id_lotes');
      $data = [
        'fecha' => $this->request->getPost('fecha'),
        'corredor' => $this->request->getPost('corredor'),
        'numero_cajas' => $this->request->getPost('numero_cajas'),
        'productor' => $this->request->getPost('productor'),
        'registro' => $this->request->getPost('registro'),
        'folio' => $this->request->getPost('folio'),
        'nombre_huerta' => $this->request->getPost('nombre_huerta'),
        'hidrotermico' => $this->request->getPost('hidrotermico'),
        'ubicacion' => $this->request->getPost('ubicacion'),
        'lote' => $this->request->getPost('lote'),
        'promedio' => $this->request->getPost('promedio'),
        'total' => $this->request->getPost('total'),
        'muestra' => $this->request->getPost('muestra'),
        'numero_cuadrilla' => $this->request->getPost('numero_cuadrilla')
      ];

      $Modelo = new Mlotes();
      $datos= $Modelo->Actualizarlote($data,$id);

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
        return redirect()->to(base_url('/Lotes'));
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
        return redirect()->to(base_url('/Lotes'));
      }


    }
    public function Eliminar($id_lotes)
    {
      // code...
      $data = [
        'id_lotes' => $id_lotes
      ];
      $Modelo = new Mlotes();
      $datos= $Modelo->Eliminarlote($data);

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
        return redirect()->to(base_url('/Lotes'));
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
        return redirect()->to(base_url('/Lotes'));
      }
    }
}
