<?php

namespace App\Controllers;

use App\Models\Mlotes;
use Fpdf\Fpdf;

class Lotes extends BaseController {

    public function index() {
        # code...
        $Modelo = new Mlotes();
        $data = array(
            'title' => 'Lotes',
            'listarlotes' => $Modelo->listarlotes()
        );
        echo view('Headers/Head', $data);
        echo view('Lotes/Vlotes', $data);
    }

    public function Agregarlote() {
        # code...
        $data = array(
            'title' => 'Agregar Lote'
        );
        echo view('Headers/Head', $data);
        echo view('Lotes/Vaddlote');
    }

    public function Insertar() {
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
        $datos = $Modelo->insertar_lote($data);

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

    public function Obtenerlote($id_lotes) {
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

        echo view('Headers/Head', $datos);
        echo view('Lotes/Vupdatelote', $datos);
    }

    public function Actualizar() {
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
        $datos = $Modelo->Actualizarlote($data, $id);

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

    public function Eliminar($id_lotes) {
        // code...
        $data = [
            'id_lotes' => $id_lotes
        ];
        $Modelo = new Mlotes();
        $datos = $Modelo->Eliminarlote($data);

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

    public function Pdf_lotes() {
        // code...
        $Modelo = new Mlotes();

        $listar = $Modelo->listarlotes_fecha();
        $sumacajas =$Modelo->listarsuma_fecha();

        // code...
        $pdf = new FPDF('L', 'mm', 'letter');
        $pdf->AddPage();

        $pdf->SetMargins(10, 10, 10);
        $pdf->SetTitle("Bitacora");
        $pdf->SetFont('Arial', 'B', 18);
        $pdf->SetTextColor(19, 14, 94);
        $pdf->Cell(195, 5, "BITACORA DE CONTROL EN RECEPCION", 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetTextColor(255, 87, 51);
        $pdf->Cell(195, 5, 'Frutas y Legumbres El Rodeo S.P.R de R.I', 0, 1, 'C');
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 9);
        
         $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Setfillcolor(42, 226, 141);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(249, 8, 'Lista de Lotes por fechas', 2, 1, 'C', 1);

        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(14, 8, 'Fecha', 1, 0, 'L');
        
        $pdf->Cell(12, 8, '# Cajas', 1, 0, 'L');
        
        $pdf->Cell(28, 8, utf8_decode('Registro'), 1, 0, 'L');
        $pdf->Cell(22, 8, 'folio', 1, 0, 'L');
        $pdf->Cell(24, 8, 'N.Huerta', 1, 0, 'L');
        $pdf->Cell(45, 8, 'Ubicacion', 1, 0, 'L');
        $pdf->Cell(11, 8, 'Lote', 1, 0, 'L');
       
        $pdf->Cell(20, 8, 'Total', 1, 0, 'L');
        $pdf->Cell(30, 8, 'Muestra', 1, 1, 'L');
       

        foreach ($listar as $key):
            $pdf->SetFont('Arial', '', 6);
            $pdf->Cell(14, 8, $key->fecha, 1, 0, 'L');
            
            $pdf->Cell(12, 8, $key->numero_cajas, 1, 0, 'L');
            
            $pdf->Cell(28, 8, utf8_decode($key->registro), 1, 0, 'L');
            $pdf->Cell(22, 8, $key->folio, 1, 0, 'L');
            $pdf->Cell(24, 8, utf8_decode($key->nombre_huerta), 1, 0, 'L');
            $pdf->Cell(45, 8, utf8_decode($key->ubicacion), 1, 0, 'L');
            $pdf->Cell(11, 8, utf8_decode($key->lote), 1, 0, 'L');
            
            $pdf->Cell(20, 8, utf8_decode($key->total), 1, 0, 'L');
            $pdf->Cell(30, 8, utf8_decode($key->muestra), 1, 1, 'L');
            
        endforeach;
        
         $pdf->Ln();

        $pdf->AddPage();
        
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Setfillcolor(42, 226, 141);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(42, 8, 'Total de cajas por fecha', 2, 1, 'C', 1);
        $pdf->SetTextColor(0, 0, 0);

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(20, 8, 'Fecha', 1, 0, 'L');
        $pdf->Cell(22, 8, utf8_decode('Total de cajas'), 1, 1, 'L');

        foreach ($sumacajas as $key):
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(20, 8, $key->fecha, 1, 0, 'L');
            $pdf->Cell(22, 8, utf8_decode($key->totalsuma), 1, 1, 'L');
        endforeach;

        $pdf->Ln();
        

       

        $this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output('bitacora_lotes_' . date_default_timezone_set('UTC') . '.pdf', "I");
    }

}
