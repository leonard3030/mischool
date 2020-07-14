<?php 
require('fpdf17/fpdf.php');

//A4 width : 219mm
// default margin: 10mm each side
//witable horizontal : 219-(10*2) = 189mm

$pdf = new FPDF('l','mm','A4');
$pdf->AddPage();

//Set font arial, bold, 14pt
$pdf->SetFont('Times','b',14);

$pdf->cell(275,6,'List of Trainers',0,0,'C');
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Times','',12);
//Cell(width, height, text, border, end line, [align])
$pdf->cell(30,6,'ID',1,0,'C');
$pdf->cell(90,6,'NAMES',1,0,'C');
$pdf->cell(40,6,'PHONE',1,0,'C');
$pdf->cell(55,6,'EMAIL',1,0,'C');
$pdf->cell(60,6,'IDNO',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();

$pdf->cell(30,6,'TEA2018-001',1,0,'C');
$pdf->cell(90,6,'MUNYAKAZI Gentil',1,0,'C');
$pdf->cell(40,6,'0788888888',1,0,'C');
$pdf->cell(55,6,'munyagenti@yahoo.com',1,0,'C');
$pdf->cell(60,6,'1988789654123654',1,0,'C');
$pdf->ln();


$pdf->Output();
 ?>