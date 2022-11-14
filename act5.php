<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('Agency-Bold','','AGENCYB.php');
$pdf->AddFont('Agency-Regular','','AGENCYR.php');

$pdf->AddPage();
$pdf->SetFont('Agency-Regular','',40);
$pdf->Write(15,'They may take our lives, but theyll never take our freedom! -Braveheart, 1995');
$pdf->Ln(30);

$pdf->SetFont('Agency-Bold','',40);
$pdf->Write(15,'You dont understand! I coulda had class. I coulda been a contender. I couldve been somebody, instead of a bum, which is what I am. -On the Waterfront, 1954');
$pdf->Ln(30);

$pdf->Output();
?>
