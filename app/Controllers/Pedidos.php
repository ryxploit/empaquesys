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
        'funda' => $this->request->getPost('funda')
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

    public function pdf()
    {
      // code...
            $pdf = new FPDF('P', 'mm', 'letter');
            $pdf->AddPage();

            $pdf->SetMargins(10, 10, 10);
            $pdf->SetTitle("Hoja Rastreo");
            $pdf->SetFont('Arial', 'B', 15);

            $pdf->Cell(195, 5, "Hoja de Rastreo", 0, 1, 'C');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(195, 5, 'Frutas y Legumbres El Rodeo S.P.R de R.I', 0, 1, 'C');
            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->image(base_url('assets/images/logo/logo.png'), 185, 30, 20, 20, 'PNG');
            $pdf->Cell(20, 5, utf8_decode('Fecha: '), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(50, 5, 'bernardo vazquez', 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(25, 5, utf8_decode('Codigo: '), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(50, 5, '12/12/12', 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(20, 5, utf8_decode('sello: '), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(50, 5, 'bernardo vazquez', 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(25, 5, utf8_decode('Capuchon: '), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(50, 5, '12/12/12', 0, 1, 'L');

            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(20, 5, utf8_decode('Fondo: '), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(50, 5, 'bernardo vazquez', 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(25, 5, utf8_decode('Malla: '), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(50, 5, '12/12/12', 0, 1, 'L');

            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(20, 5, utf8_decode('Termografo: '), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(50, 5, 'bernardo vazquez', 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(25, 5, utf8_decode('Destino: '), 0, 0, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(50, 5, '12/12/12', 0, 1, 'L');

            $pdf->Ln();

            $pdf->SetFont('Arial', 'B', 15);
            $pdf->Setfillcolor(0, 0, 0);
            $pdf->SetTextColor(255, 255, 255);
            $pdf->Cell(198, 5, 'Lista de pallet', 1, 1, 'C', 1);
            $pdf->SetTextColor(0, 0, 0);

            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(20, 8, 'Fecha', 1, 0, 'L');
            $pdf->Cell(22, 8, 'Variedad', 1,0,'L');
            $pdf->Cell(22, 8, 'Marca', 1,0,'L');
            $pdf->Cell(22, 8, 'Pallet', 1, 0, 'L');
            $pdf->Cell(22, 8,utf8_decode( 'Tamaño'), 1,0,'L');
            $pdf->Cell(22, 8, 'Hidrotermico', 1,0,'L');
            $pdf->Cell(22, 8, 'total', 1, 0, 'L');
            $pdf->Cell(24, 8, 'Folio', 1,0,'L');
            $pdf->Cell(22, 8, 'Rastreo', 1,1,'L');

            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(20, 8, '14/13/2021', 1,0,'L');
            $pdf->Cell(22, 8, '342', 1,0,'C');
            $pdf->Cell(22, 8, 'fdf', 1,0,'L');
            $pdf->Cell(22, 8, '342', 1,0,'C');
            $pdf->Cell(22, 8, 'fdf', 1,0,'L');
            $pdf->Cell(22, 8, '342', 1,0,'C');
            $pdf->Cell(22, 8, 'fdf', 1,0,'L');
            $pdf->Cell(24, 8, utf8_decode('R05208149-1'), 1,0,'C');
            $pdf->Cell(22, 8, 'erwer', 1,1,'C');

            $pdf->Ln();


            $pdf->AddPage();
            // add text
            $pdf->SetFont('Arial', '', 12);
            $pdf->MultiCell(0, 7, utf8_decode('Los archivos PDF se utilizan ampliamente en documentos y reportes que necesitan mantener el diseño y contenido (imágenes, tipos de letra, colores, etc), por ello vamos a aprender a crear archivos PDF utilizando PHP.'), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.'), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.'), 0, 1);
            $pdf->Ln();

            $this->response->setHeader('Content-Type', 'application/pdf');
            $pdf->Output("rastreo_pdf.pdf", "I");


    }
}
