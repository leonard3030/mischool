<?php 
require('fpdf17/fpdf.php');

//A4 width : 219mm
// default margin: 10mm each side
//witable horizontal : 219-(10*2) = 189mm

$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();

//Set font arial, bold, 14pt
$pdf->SetFont('Times','b',14);

$pdf->cell(190,6,'List of courses in L3 Computer Application',0,0,'C');
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Times','',12);
//Cell(width, height, text, border, end line, [align])
$pdf->cell(100,6,'Name',1,0,'C');
$pdf->cell(50,6,'Code',1,0,'C');
$pdf->cell(20,6,'Credits',1,0,'C');
$pdf->ln();

$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();
$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();
$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();
$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();
$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();
$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();
$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();
$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();
$pdf->cell(100,6,'Database design',1,0);
$pdf->cell(50,6,'CCMM301',1,0);
$pdf->cell(20,6,'3',1,0);
$pdf->ln();

$pdf->Output();
 ?>