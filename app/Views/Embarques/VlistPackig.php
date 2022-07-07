<div id="content">
    <section class="section">
        <div class="card border-primary  ">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="card-header">
                    <h2 class="text-center">Packing list Pedido: <?php echo $sumaCajas[0]['pedido']; ?> </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h4>
                            Importador:
                            <small class="text-muted"> </small>
                        </h4>
                        <h4>
                            Dirección:
                            <small class="text-muted"> </small> 
                        </h4>
                        <h4>
                            País:
                            <small class="text-muted"></small>
                        </h4>
                        <h4>
                            Transportador:
                            <small class="text-muted"> <?php //echo $datos[0]['hora_embarque'];   ?></small>
                        </h4>
                        <h4>
                            Compania:
                            <small class="text-muted"> <?php //echo $datos[0]['chofer']; ?></small>
                        </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>
                            Destino:
                            <small class="text-muted"> <?php //echo $datos[0]['chofer']; ?></small>
                        </h4>
                        <h4>
                            Temp ºC:
                            <small class="text-muted"> 13</small>
                        </h4>
                        <h4>
                            Humedad:
                            <small class="text-muted"> <?php //echo $datos[0]['chofer']; ?></small> 
                        </h4>
                        <h4>
                            Factura:
                            <small class="text-muted"> <?php //echo $datos[0]['chofer']; ?></small>
                        </h4>
                        <h4>
                            Fecha:
                            <small class="text-muted"> <?php echo $sumaCajas[0]['fecha_embarque']; ?></small>
                        </h4>
                    </div>
                    <div class="col-4 ">
                        <h4>
                            Producto:
                            <small class="text-muted"> MANGO</small>
                        </h4>
                        <h4>
                            Variedad:
                            <small class="text-muted"> <?php echo $datos[0]['variedad']; ?></small>
                        </h4>
                        <h4>
                            Pallets:
                            <small class="text-muted"> <?php echo $totalP->getNumRows(); ?></small>
                        </h4>
                        <h4>
                            Numero de cajas:
                            <small class="text-muted"> <?php echo $sumaCajas[0]['totalC']; ?></small>
                        </h4>
                        <h4>
                            Pedido:
                            <small class="text-muted"> <?php echo $sumaCajas[0]['pedido']; ?></small>
                        </h4>
                    </div>
                </div>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Numero de Pallet</th>
                                <th class="text-center">4</th>
                                <th class="text-center">5</th>
                                <th class="text-center">9</th>
                                <th class="text-center">10</th>
                                <th class="text-center">11</th>
                                <th class="text-center">12</th>
                                <th class="text-center">13</th>
                                <th class="text-center">14</th>
                                <th>Total</th>
                                <th>Peso bruto</th>
                                <th>Marca </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1;
                            foreach ($listarpallet->getResult() as $key): ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $key->numero_pallet; ?></td>
                                    <td><?php
                                        if ($key->calibre == 4) {
                                            echo $key->cantidad;
                                        } else {
                                            echo '';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($key->calibre == 5) {
                                            echo $key->cantidad;
                                        } else {
                                            echo '';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($key->calibre == 9) {
                                            echo $key->cantidad;
                                        } else {
                                            echo '';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($key->calibre == 10) {
                                            echo $key->cantidad;
                                        } else {
                                            echo '';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($key->calibre == 11) {
                                            echo $key->cantidad;
                                        } else {
                                            echo '';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($key->calibre == 12) {
                                            echo $key->cantidad;
                                        } else {
                                            echo '';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($key->calibre == 13) {
                                            echo $key->cantidad;
                                        } else {
                                            echo '';
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($key->calibre == 14) {
                                            echo $key->cantidad;
                                        } else {
                                            echo '';
                                        }
                                        ?></td>
                                    <td><?php echo $key->total; ?></td>
                                    <td><?php echo $key->peso_pallet; ?></td>
                                    <td><?php echo $key->marca; ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="col-md-4">
                    <h4>
                        Total de cajas:
                        <small class="text-muted"> <?php echo $sumaCajas[0]['totalC']; ?></small>
                    </h4>
                    <h4>
                        Peso Bruto:
                        <small class="text-muted"> <?php echo $sumaCajas[0]['pesoB']; ?></small>
                    </h4>
                    <h4>
                        Peso Neto:
                        <small class="text-muted"> <?php
                            $pesoBruto = $sumaCajas[0]['pesoB'];
                            $totaPa = $totalP->getNumRows();

                            $resul = $pesoBruto - (60 * $totaPa);

                            echo $resul;
                            ?></small>
                    </h4>
                    <h4>
                        Total de Pallets:
                        <small class="text-muted"> <?php echo $totalP->getNumRows(); ?></small>
                    </h4>
                    <h4>
                        AWB:
                        <small class="text-muted"><?php echo $sumaCajas[0]['cantidad']; ?></small>
                    </h4>
                    <h4>
                        Observaciones:
                        <small class="text-muted"><?php echo $sumaCajas[0]['observaciones']; ?></small>
                    </h4>
                    <h4>
                        Termografo:
                        <small class="text-muted"><?php echo $sumaCajas[0]['termografo']; ?></small>
                    </h4>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="section">
    <div class="card">

        <a href="<?php echo base_url('Embarques/pdf_packing/' . $key->pedido); ?>" type="button" class="btn btn-primary btn-lg" name="button">Imprimir</a>
    </div>
</section>


<?= $this->include("Footers/foot") ?>



<script type="text/javascript">
    function mayus(e) {
        e.value = e.value.toUpperCase();
    }
</script>



<script type="text/javascript">
    function myExportPdf() {
        var element = $("#content"); // Este elemento dom es el contenedor div para exportar el pdf
        var w = element.width(); // Obtiene el ancho del contenedor
        var h = element.height(); // Obtiene la altura del contenedor
        var offsetTop = element.offset().top; // Obtiene la distancia desde el contenedor hasta la parte superior del documento
        var offsetLeft = element.offset().left; // Obtiene la distancia desde el contenedor hasta el extremo izquierdo del documento
        var canvas = document.createElement("canvas");
        var abs = 0;
        var win_i = $(window).width(); // Obtiene el ancho de la ventana visual actual (sin incluir las barras de desplazamiento)
        var win_o = window.innerWidth; // Obtiene el ancho de la ventana actual (incluidas las barras de desplazamiento)
        if (win_o > win_i) {
            abs = (win_o - win_i) / 2; // Obtiene la mitad de la longitud de la barra de desplazamiento
        }
        canvas.width = w * 2; // Aumenta el ancho && alto del lienzo dos veces
        canvas.height = h * 2;
        var context = canvas.getContext("2d");
        context.scale(2, 2);
        context.translate(-offsetLeft - abs, -offsetTop);
        // No hay una barra de desplazamiento horizontal por defecto aquí, porque offset.left (), hay una diferencia cuando no hay barra de desplazamiento, entonces
        // Al traducir, elimine esta diferencia
        html2canvas(element).then(function (canvas) {
            var contentWidth = canvas.width;
            var contentHeight = canvas.height;
            // Una página de pdf muestra la altura del lienzo generado por la página html;
            var pageHeight = contentWidth / 592.28 * 841.89;
            // Altura de la página html sin pdf generado
            var leftHeight = contentHeight;
            // Desplazamiento de página
            var position = 0;
            // El tamaño del papel a4 [595.28,841.89], el ancho y alto del lienzo generado por la página html en el pdf
            var imgWidth = 595.28;
            var imgHeight = 592.28 / contentWidth * contentHeight;

            var pageData = canvas.toDataURL('image/jpeg', 1.0);

            var pdf = new jsPDF('', 'pt', 'letter');

            // Hay dos alturas para distinguir, una es la altura real de la página html y la altura de la página que genera el pdf (841.89)
            // Cuando el contenido no excede el rango mostrado en una página del pdf, no es necesario paginar
            if (leftHeight < pageHeight) {
                pdf.addImage(pageData, 'JPEG', 0, 0, imgWidth, imgHeight);
            } else { // Paginación
                while (leftHeight > 0) {
                    pdf.addImage(pageData, 'JPEG', 0, position, imgWidth, imgHeight)
                    leftHeight -= pageHeight;
                    position -= 841.89;
                    // Evite agregar páginas en blanco
                    if (leftHeight > 0) {
                        pdf.addPage();
                    }
                }
            }
            6

            window.open(pdf.output('bloburl'), '_blank');
            // pdf.save('myTest.pdf');
        })
    }

    $("#printBtn").click(function () {
        myExportPdf();
    });
</script>
