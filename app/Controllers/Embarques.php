<?php

namespace App\Controllers;

use App\Models\Membarques;
use Fpdf\Fpdf;

class Embarques extends BaseController {

    public function index() {
        # code...
        $Modelo = new Membarques();
        $data = array(
            'title' => 'PACKING LIST',
            'listar_packing' => $Modelo->listar_packing_list()
        );
        echo view('Headers/Head', $data);
        echo view('Embarques/Vpackinglist', $data);
        echo view('Footers/Foot');
    }

    public function Packing($pedido) {
        // code...
        $Modelo = new Membarques();

        $data = array(
            'title' => ' Ver PACKING LIST',
            'listarpallet' => $Modelo->listarpallet_packing($pedido),
            'totalP' => $Modelo->listarpallet_packing($pedido),
            'datos' => $Modelo->listarpallet_packing($pedido)->getResultArray(),
            'sumaCajas' => $Modelo->sumaCajas_packing($pedido)->getResultArray()
        );
        echo view('Headers/Head', $data);
        echo view('Embarques/VlistPackig', $data);
    }

    public function Agregarembarque() {
        # code...
        $Modelo = new Membarques();
        $datos = $data = array(
            'title' => 'Agregar embarque',
            'listarhembarques' => $Modelo->listarhembarques()
        );
        echo view('Headers/Head', $data);
        echo view('Embarques/Vaddembarques', $data);
    }

    public function insertarhembarque() {
        // code...
        $data = [
            'fecha_embarque' => $this->request->getPost('fecha_embarque'),
            'trailer' => $this->request->getPost('trailer'),
            'caja' => $this->request->getPost('caja'),
            'hora_embarque' => $this->request->getPost('hora_embarque'),
            'chofer' => $this->request->getPost('chofer'),
            'termografo' => $this->request->getPost('termografo'),
            'destinatario' => $this->request->getPost('destinatario'),
            'numero_envio' => $this->request->getPost('numero_envio'),
            'observaciones' => $this->request->getPost('observaciones')
        ];

        $Modelo = new Membarques();
        $datos = $Modelo->insertar_hembarque($data);

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

    public function Agregarpallet($id_embarques) {
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
            'listartotalpallet' => $Modelo->listartotalpallet2($id),
            'sumaTotal' => $Modelo->sumarTotalpallet($id)
        );
        echo view('Headers/Head', $data);
        echo view('Embarques/Vaddpallet', $data);
    }

    public function Actualizar_embarque_pallet() {
        // code...
        $id = $this->request->getPost('id_embarques_pallet');

        $data = [
            'pedido' => $this->request->getPost('pedido'),
            'numero_pallet' => $this->request->getPost('numero_pallet'),
            'peso_pallet' => $this->request->getPost('peso_pallet'),
            'marca_caja' => $this->request->getPost('marca_caja'),
            'cantidad' => $this->request->getPost('cantidad'),
            'calibre' => $this->request->getPost('calibre'),
            'hidrotermico' => $this->request->getPost('hidrotermico'),
            'termografo_pallet' => $this->request->getPost('termografo_pallet')
        ];

        $Modelo = new Membarques();
        $datos = $Modelo->Actualizar_data_embarque_pallet($data, $id);

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

    public function Obtener_embarque_pallet($id_embarques_pallet) {
        // code...

        $data = [
            'id_embarques_pallet' => $id_embarques_pallet
        ];
        $Modelo = new Membarques();
        $respuesta = $Modelo->Pallet_embarque_obtener($data);
        echo json_encode($respuesta);
    }

    public function Insertarpallet() {
        // code...


        $data = [
            'pedido' => $this->request->getPost('pedido'),
            'numero_pallet' => $this->request->getPost('numero_pallet'),
            'peso_pallet' => $this->request->getPost('peso_pallet'),
            'marca_caja' => $this->request->getPost('marca_caja'),
            'cantidad' => $this->request->getPost('cantidad'),
            'calibre' => $this->request->getPost('calibre'),
            'hidrotermico' => $this->request->getPost('hidrotermico'),
            'termografo_pallet' => $this->request->getPost('termografo_pallet'),
            'embarque_id' => $this->request->getPost('embarque_id')
        ];

        $Modelo = new Membarques();
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

    public function Obtener_embarque($id_embarques) {
        // code...

        $data = [
            'id_embarques' => $id_embarques
        ];
        $Modelo = new Membarques();
        $respuesta = $Modelo->embarque_obtener($data);
        echo json_encode($respuesta);
    }

    public function Actualizar_embarque() {
        // code...
        $id = $this->request->getPost('id_embarques');

        $data = [
            'fecha_embarque' => $this->request->getPost('fecha_embarque'),
            'trailer' => $this->request->getPost('trailer'),
            'caja' => $this->request->getPost('caja'),
            'hora_embarque' => $this->request->getPost('hora_embarque'),
            'chofer' => $this->request->getPost('chofer'),
            'termografo' => $this->request->getPost('termografo'),
            'destinatario' => $this->request->getPost('destinatario'),
            'numero_envio' => $this->request->getPost('numero_envio'),
            'observaciones' => $this->request->getPost('observaciones'),
            'status_embarque' => $this->request->getPost('status_embarque')
        ];

        $Modelo = new Membarques();
        $datos = $Modelo->Actualizar_data_embarque($data, $id);

        // code...
        if ($data) {
            // code...
            $session = session();
            $session->setFlashdata('mensaje', '
              <script type="text/javascript">
              $(document).ready(function(){
                Swal.fire(
                  "Buen trabajo!",
                  "se modifico con exito el embarque!",
                  "success")
                });
                </script>
              ');
        }
    }
    
     public function Eliminar_embarque($id_embarques) {
        // code...
        $data = [
            'id_embarques' => $id_embarques
        ];
        $Modelo = new Membarques();
        $datos = $Modelo->Eliminarembarque($data);

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

    public function pdf_packing($pedido) {
        // code...
        $Modelo = new Membarques();

        $listarpallet = $Modelo->listarpallet_packing($pedido);
        $totalP = $Modelo->listarpallet_packing($pedido);
        $datos = $Modelo->listarpallet_packing($pedido)->getResultArray();
        $sumaCajas = $Modelo->sumaCajas_packing($pedido)->getResultArray();

        // code...
        $pdf = new FPDF('L', 'mm', 'letter');
        $pdf->AddPage();

        $pdf->SetMargins(10, 10, 10);
        $pdf->SetTitle("Hoja Packing List");
        $pdf->SetFont('Arial', 'B', 18);
        $pdf->SetTextColor(19, 14, 94);
        $pdf->Cell(195, 5, "Hoja Packing List", 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetTextColor(255, 87, 51);
        $pdf->Cell(195, 5, 'Frutas y Legumbres El Rodeo S.P.R de R.I', 0, 1, 'C');
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 9);

        $pdf->Cell(22, 8, utf8_decode('Importer: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, '  ', 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Address: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, '', 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Country: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, ' ', 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Transporter: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, '  ', 2, 1, 'L');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Company: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, '  ', 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Destino: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, '  ', 2, 0, 'L');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Temp ºC: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, ' 13 ', 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Humedad: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, '  ', 2, 1, 'L');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Factura: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, '  ', 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Fecha: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $sumaCajas[0]['fecha_embarque'], 2, 0, 'L');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Producto: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, ' MANGO ', 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Variety: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $datos[0]['variedad'], 2, 1, 'L');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Pallets: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $totalP->getNumRows(), 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(28, 8, utf8_decode('Nr.Boxes: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $sumaCajas[0]['totalC'], 2, 0, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Pedido: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $sumaCajas[0]['pedido'], 2, 1, 'L');

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Setfillcolor(42, 226, 141);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(202, 8, 'Lista de pallet', 2, 1, 'C', 1);

        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(13, 8, 'PN', 1, 0, 'C');
        $pdf->Cell(27, 8, 'Numero de Pallet', 1, 0, 'C');
        //$pdf->Cell(80, 8, 'Calibre - Cantidad', 1, 0, 'C');
        $pdf->Cell(12, 8, '4', 1, 0, 'C');
        $pdf->Cell(12, 8, '5', 1, 0, 'C');
        $pdf->Cell(12, 8, '9', 1, 0, 'C');
        $pdf->Cell(12, 8, '10', 1, 0, 'C');
        $pdf->Cell(12, 8, '11', 1, 0, 'C');
        $pdf->Cell(12, 8, '12', 1, 0, 'C');
        $pdf->Cell(12, 8, '13', 1, 0, 'C');
        $pdf->Cell(12, 8, '14', 1, 0, 'C');
        $pdf->Cell(22, 8, 'Total', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Peso bruto', 1, 0, 'L');
        $pdf->Cell(22, 8, 'Marca', 1, 1, 'L');
       
        $number = 1;
        foreach ($listarpallet->getResult() as $key):
            $pdf->SetFont('Arial', '', 8);

            // code...
        $valores = explode(';', $key->todos);
        //$valores = array($key->todos);
        //print_r($valores);
       
            $pdf->Cell(13, 8, $number++, 1, 0, 'C'); //$number++
            $pdf->Cell(27, 8, $key->numero_pallet, 1, 0, 'C');
           // $pdf->Cell(80, 8, $key->todos, 1, 0, 'C');
            if($key->calibre == 4){
            $pdf->Cell(12, 8, $key->cantidad, 1, 0, 'C');
            } else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 5){
            $pdf->Cell(12, 8, $key->cantidad, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 9){
            $pdf->Cell(12, 8, $key->cantidad, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 10){
            $pdf->Cell(12, 8, $key->cantidad, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 11){
            $pdf->Cell(12, 8, $key->cantidad, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 12){
            $pdf->Cell(12, 8, $key->cantidad, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 13){
            $pdf->Cell(12, 8, $key->cantidad, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 14){
            $pdf->Cell(12, 8, $key->cantidad, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            $pdf->Cell(22, 8, $key->total, 1, 0, 'L');
            $pdf->Cell(22, 8, $key->peso_pallet, 1, 0, 'C');
            $pdf->Cell(22, 8, $key->marca, 1, 1, 'C');
            

        endforeach;

        $pdf->Ln();
        
        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Setfillcolor(42, 226, 141);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(96, 8, 'Total boxes', 2, 1, 'C', 1);

        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(12, 8, '4', 1, 0, 'C');
        $pdf->Cell(12, 8, '5', 1, 0, 'C');
        $pdf->Cell(12, 8, '9', 1, 0, 'C');
        $pdf->Cell(12, 8, '10', 1, 0, 'C');
        $pdf->Cell(12, 8, '11', 1, 0, 'C');
        $pdf->Cell(12, 8, '12', 1, 0, 'C');
        $pdf->Cell(12, 8, '13', 1, 0, 'C');
        $pdf->Cell(12, 8, '14', 1, 1, 'C');
       
       
        foreach ($listarpallet->getResult() as $key):
            $pdf->SetFont('Arial', '', 8);

       
            
            if($key->calibre == 4){
            $pdf->Cell(12, 8, $key->total, 1, 0, 'C');
            } else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 5){
            $pdf->Cell(12, 8, $key->total, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 9){
            $pdf->Cell(12, 8, $key->total, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 10){
            $pdf->Cell(12, 8, $key->total, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 11){
            $pdf->Cell(12, 8, $key->total, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 12){
            $pdf->Cell(12, 8, $key->total, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 13){
            $pdf->Cell(12, 8, $key->total, 1, 0, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 0, 'C');  
            }
            if($key->calibre == 14){
            $pdf->Cell(12, 8, $key->total, 1, 1, 'C');
            }else {
              $pdf->Cell(12, 8, '', 1, 1, 'C');  
            }
            

        endforeach;
        
        
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(28, 8, utf8_decode('Total de boxes: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(25, 8, $sumaCajas[0]['totalC'], 2, 1, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Peso Bruto: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $sumaCajas[0]['pesoB'], 2, 1, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('Peso Neto: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pesoBruto = $sumaCajas[0]['pesoB'];
        $totaPa = $totalP->getNumRows();
        $resul = $pesoBruto - (60 * $totaPa);
        $pdf->Cell(22, 8, $resul, 2, 1, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(30, 8, utf8_decode('Total de Pallets: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $totalP->getNumRows(), 2, 1, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(22, 8, utf8_decode('AWB: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, '  ', 2, 1, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(30, 8, utf8_decode('Observaciones: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $sumaCajas[0]['observaciones'], 2, 1, 'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(30, 8, utf8_decode('Termografo: '), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(22, 8, $sumaCajas[0]['termografo'], 2, 1, 'L');

        $this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output('packing' . $sumaCajas[0]['pedido'] . '.pdf', "I");
    }

}
