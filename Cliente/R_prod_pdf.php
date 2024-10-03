<?php
// Incluir la librería de FPDF
require("lib/fpdf/fpdf.php");

class PDF extends FPDF {
    // Cabecera
    function Header() {
        $this->Image("img/logo.png",10,8,25);
        $this->SetFont("Arial", 'B', 15);
        $this->Cell(110);
        $this->Cell(60, 10, 'REPORTE DE PRODUCTOS EXISTENTES', 0, 0, 'C');
        $this->Ln(30);
        $this->SetFillColor(0,56,232);
        $this->SetTextColor(255,255,255);
        $this->SetFont("Arial", 'B', 12);
        $this->Cell(30, 10, 'Nombre', 1, 0, 'C',true);
        $this->Cell(120, 10, utf8_decode('Descripción'), 1, 0, 'C',true);
        $this->Cell(30, 10, 'Cantidad', 1, 0, 'C',true);
        $this->Cell(20, 10, 'Precio', 1, 0, 'C',true);
        $this->Cell(20, 10, 'Color', 1, 0, 'C',true);
        $this->Cell(20, 10, utf8_decode('Tamaño'), 1, 0, 'C',true);
        $this->Ln(10);
    }

    // Pie de página
    function Footer() {
        // Posición a 1.5 cm del final de la página
        $this->SetY(-15);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(0, 10, utf8_decode('Página ' . $this->PageNo()), 0, 0, 'C');
    }
}

// Incluir la conexión a la base de datos
require("../servidor/conexion.php");

// Asegurarse de que la conexión se estableció correctamente
if (mysqli_connect_errno()) {
    die('Error de conexión: ' . mysqli_connect_error());
}

// Consulta a la base de datos
$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    die('Error en la consulta: ' . mysqli_error($conexion));
}

$pdf = new PDF('L');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10);

// Fetch data and display it in the PDF
while ($row = mysqli_fetch_assoc($resultado)) {
    $pdf->Cell(30, 10,  utf8_decode($row['nombre']), 1, 0, 'C');
    $pdf->Cell(120, 10,  utf8_decode($row['descripcion']), 1, 0, 'C');
    $pdf->Cell(30, 10,  $row['cantidad'], 1, 0, 'C');
    $pdf->Cell(20, 10,  $row['precio'], 1, 0, 'C');
    $pdf->Cell(20, 10, utf8_decode($row['color']), 1, 0, 'C');
    $pdf->Cell(20, 10, $row['tamanio'], 1, 0, 'C');
    $pdf->Ln();
}

$pdf->Output();
?>
