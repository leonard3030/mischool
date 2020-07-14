<?php 
require('fpdf17/fpdf.php');

//A4 width : 219mm
// default margin: 10mm each side
//witable horizontal : 219-(10*2) = 189mm

$pdf = new FPDF('l','mm','A4');
$pdf->AddPage();

//Set font arial, bold, 14pt
$pdf->SetFont('Times','b',14);

//Cell(width, height, text, border, end line, [align])
$pdf->cell(50,6,'Name',1,0,'C');
$pdf->cell(30,6,'Abbreviation',1,0,'C');
$pdf->cell(90,6,'Quali-Title',1,0,'C');
$pdf->cell(30,6,'RTQF level',1,0,'C');
$pdf->cell(75,6,'Teacher',1,0,'C');
$pdf->SetFont('Times','',12);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->ln();

$pdf->cell(50,6,'Computer Application',1,0);
$pdf->cell(30,6,'L3 CAP',1,0);
$pdf->cell(90,6,'TVET CERTIFICATE 1',1,0);
$pdf->cell(30,6,'LEVEL 3',1,0);
$pdf->cell(75,6,'KALISA Aimable',1,0);
$pdf->Output();
 ?>