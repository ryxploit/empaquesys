<?php

namespace App\Controllers;

use App\Models\Mrastreos;
use Fpdf\Fpdf;

class Rastreo extends BaseController {

    public function index() {
        # code...
        $Modelo = new Mrastreos();
        $data = array(
            'title' => 'Hoja de rastreo',
            'listarhrastreo' => $Modelo->listarhrastreo()
        );
        echo view('Headers/Head', $data);
        echo view('Rastreo/Vhrastreo', $data);
    }

    public function Agregarhrastreo() {
        # code...
        $Modelo = new Mrastreos();
        $data = array(
            'title' => 'Agregar Hoja de rastreo',
            'listarpedidos' => $Modelo->listarpedidos()
        );
        echo view('Headers/Head', $data);
        echo view('Rastreo/Vaddhrastreo', $data);
    }

    public function Agregarpallet() {
        # code...
        $data = array(
            'title' => 'Agregar Pallet a Hoja de rastreo'
        );
        echo view('Headers/Head', $data);
        echo view('Rastreo/Vaddpallet');
    }

    public function Insertarhrastreo() {
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
        $datos = $Modelo->insertar_datos_hrastreo($data);

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

    public function Obtenerhrastreo($id_rastreo) {
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

        echo view('Headers/Head', $datos);
        echo view('Rastreo/Vupdaterastreo', $datos);
        echo view('Footers/Foot');
    }

    public function Actualizarhrastreo() {
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
        $datos = $Modelo->Actualizar_data_hrastreo($data, $id);

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

    public function Eliminarhrastreo($id_rastreo) {
        // code...
        $data = [
            'id_rastreo' => $id_rastreo
        ];
        $Modelo = new Mrastreos();
        $datos = $Modelo->Eliminar_data_hrastreo($data);

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

    public function Obtenerrastreo($id_rastreo) {
        // code...
        $data = [
            'id_rastreo' => $id_rastreo
        ];

        $Modelo = new Mrastreos();
        $respuesta = $Modelo->rastreoobtener($data);
        $respuestaPallet = $Modelo->listarpallet($data);
        $datos = [
            'dato' => $respuesta,
            'title' => 'Agregar Pallets',
            'listarlotes' => $Modelo->listarlotes(),
            'listarpallet' => $respuestaPallet
        ];

        echo view('Headers/Head', $datos);
        echo view('Rastreo/Vaddpallet', $datos);
    }

    public function Insertarpallet() {
        // code...
        $id_rastreo = $this->request->getPost('id_rastreo');

        $data = [
            'fecha' => $this->request->getPost('fecha'),
            'variedad' => $this->request->getPost('variedad'),
            'marca' => $this->request->getPost('marca'),
            'pallet' => $this->request->getPost('pallet'),
            'tamaño' => $this->request->getPost('tamaño'),
            'peso' => $this->request->getPost('peso'),
            'hidrotermico' => $this->request->getPost('hidrotermico'),
            'total' => $this->request->getPost('total'),
            'folio' => $this->request->getPost('folio'),
            'rastreo' => $this->request->getPost('rastreo'),
            'lote' => $this->request->getPost('lote'),
            'codigo_rastreo' => $this->request->getPost('codigo_rastreo')
        ];

        $Modelo = new Mrastreos();
        $datos = $Modelo->insertar_datos_pallet($data);

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

    public function EliminarPallet($id_pallet) {
        // code...
        $data = [
            'id_pallet' => $id_pallet
        ];
        $Modelo = new Mrastreos();
        $datos = $Modelo->EliminarPallet($data);

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

    public function Obtenerpallet($id_pallet) {
        // code...

        $data = [
            'id_pallet' => $id_pallet
        ];
        $Modelo = new Mrastreos();
        $respuesta = $Modelo->Palletobtener($data);
        echo json_encode($respuesta);
    }

    public function Actualizarpallet() {
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
            'rastreo' => $this->request->getPost('rastreo'),
            'lote' => $this->request->getPost('lote')
        ];

        $Modelo = new Mrastreos();
        $datos = $Modelo->Actualizar_data_pallet($data, $id);

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

    public function pdf($id_rastreo) {
        $data = [
            'id_rastreo' => $id_rastreo
        ];

        $Modelo = new Mrastreos();
        $respuestaPallet = $Modelo->listarpallet($data);
        $respuestaPalletArray = $Modelo->listarpalletArray($data);
        $respuestaHrastreo = $Modelo->rastreoobtener($data);
        // code...
        $pdf = new FPDF('P', 'mm', 'letter');
        $pdf->AddPage();

        $pdf->SetMargins(10, 10, 10);
        $pdf->SetTitle("Hoja Rastreo");
        $pdf->SetFont('Arial', 'B', 18);
        $pdf->SetTextColor(19, 14, 94);
        $pdf->Cell(195, 5, "Hoja de Rastreo", 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetTextColor(255, 87, 51);
        $pdf->Cell(195, 5, 'Frutas y Legumbres El Rodeo S.P.R de R.I', 0, 1, 'C');
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 9);

        $pdf->Cell(22, 8, utf8_decode('Fecha: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $respuestaPalletArray[0]['fecha'], 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Codigo: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $respuestaHrastreo[0]['codigo'], 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('sello: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $respuestaHrastreo[0]['sello'], 2, 1, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Capuchon: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $respuestaHrastreo[0]['capuchon'], 2, 0, 'L');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Fondo: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $respuestaHrastreo[0]['fondo'], 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Malla: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $respuestaHrastreo[0]['malla'], 2, 1, 'L');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Termografo: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $respuestaHrastreo[0]['termografo'], 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Destino: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $respuestaHrastreo[0]['destino'], 2, 1, 'L');

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Setfillcolor(42, 226, 141);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(198, 8, 'Lista de pallet', 2, 1, 'C', 1);

        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(20, 8, 'Fecha', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Variedad', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Marca', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Pallet', 1, 0, 'L');
        $pdf->Cell(22, 8, utf8_decode('Tamaño'), 1, 0, 'L');
        $pdf->Cell(22, 8, 'Hidrotermico', 1, 0, 'L');
        $pdf->Cell(22, 8, 'total', 1, 0, 'L');
        $pdf->Cell(24, 8, 'Folio', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Rastreo', 1, 1, 'L');

        foreach ($respuestaPallet as $key):
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(20, 8, $key->fecha, 1, 0, 'L');
            $pdf->Cell(22, 8, $key->variedad, 1, 0, 'C');
            $pdf->Cell(22, 8, $key->marca, 1, 0, 'L');
            $pdf->Cell(22, 8, $key->pallet, 1, 0, 'C');
            $pdf->Cell(22, 8, utf8_decode($key->tamaño), 1, 0, 'L');
            $pdf->Cell(22, 8, $key->hidrotermico, 1, 0, 'C');
            $pdf->Cell(22, 8, $key->total, 1, 0, 'L');
            $pdf->Cell(24, 8, utf8_decode($key->folio), 1, 0, 'C');
            $pdf->Cell(22, 8, $key->rastreo, 1, 1, 'C');
        endforeach;

        $pdf->Ln();

        $pdf->AddPage();
        // add text
        $dato = $respuestaHrastreo[0]['codigo'];
        //$dato2 = $respuestaHrastreo[0]['id_rastreo'];
        $respuestaLote = $Modelo->listarlote($dato);
        $respuestaLoteCJ = $Modelo->sumlotepa($dato);
        $respuestatotalpallet = $Modelo->listartotalpallet($data);

        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Setfillcolor(42, 226, 141);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(188, 8, 'Lista de Lotes', 2, 1, 'C', 1);
        $pdf->SetTextColor(0, 0, 0);

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(20, 8, 'Fecha', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Lote', 1, 0, 'L');
        $pdf->Cell(80, 8, 'Corredor', 1, 0, 'L');
        $pdf->Cell(28, 8, 'Folio', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Hidrotermico', 1, 0, 'L');
        $pdf->Cell(22, 8, utf8_decode('Total'), 1, 1, 'L');

        foreach ($respuestaLote as $key):

            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(20, 8, $key->fecha, 1, 0, 'L');
            $pdf->Cell(22, 8, $key->lote, 1, 0, 'C');
            $pdf->Cell(80, 8, $key->corredor, 1, 0, 'L');
            $pdf->Cell(28, 8, $key->folio, 1, 0, 'C');
            $pdf->Cell(22, 8, $key->hidrotermico, 1, 0, 'C');
            $pdf->Cell(22, 8, utf8_decode($key->totalD), 1, 1, 'L');

        endforeach;
        foreach ($respuestaLoteCJ as $key):
            $pdf->Cell(194, 8, utf8_decode("Total de Cajas: " . $key->totalCJ . ""), 0, 0, 'R');
        endforeach;
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Setfillcolor(42, 226, 141);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(42, 8, 'Lista total ', 2, 1, 'C', 1);
        $pdf->SetTextColor(0, 0, 0);

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(20, 8, 'Pallets', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Cajas', 1, 1, 'L');

        foreach ($respuestatotalpallet as $key):

            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(20, 8, $key->xx, 1, 0, 'L');
            $pdf->Cell(22, 8, $key->yy, 1, 1, 'C');
        endforeach;

        $pdf->Ln();

        $this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output('rastreo_' . $respuestaHrastreo[0]['codigo'] . '.pdf', "I");
    }

}
