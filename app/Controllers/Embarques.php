<?php

namespace App\Controllers;
use App\Models\Membarques;

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
}
