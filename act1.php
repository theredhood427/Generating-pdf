<?php

include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf('L', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Courier', 'B', 18);
$pdf->Cell(90, 10, 'Ron Russelle L. Bangsil', 1, 1);
$pdf->Cell(10, 10, 'CCS', 0, 1);
$pdf->Cell(10, 10, 'bangsil.ronruselle@auf.edu.ph', 0, 1);
$pdf->Cell(10, 10, '09159536887', 0, 1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(20, 200, 'Powered by FPDF');
$pdf->Output();