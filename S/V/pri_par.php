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
$pdf->cell(30,6,'RegNo',1,0,'C');
$pdf->cell(90,6,'Student names',1,0,'C');
$pdf->cell(30,6,'Class',1,0,'C');
$pdf->cell(90,6,"Parent's names",1,0,'C');
$pdf->cell(40,6,"Parent's Status",1,0,'C');
$pdf->SetFont('Times','',12);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'MUKIZA Eric',1,0);
$pdf->cell(30,6,'L3 MAS',1,0);
$pdf->cell(90,6,"KANAMUGIRE Janvier",1,0);
$pdf->cell(40,6,"Father",1,0);
$pdf->ln();

$pdf->cell(30,6,'2020-86',1,0);
$pdf->cell(90,6,'UWAMAHORO Marie Christella',1,0);
$pdf->cell(30,6,'L3 RCO',1,0);
$pdf->cell(90,6,"UMULISA Joyeuse",1,0);
$pdf->cell(40,6,"Guardian",1,0);
$pdf->ln();
				

$pdf->Output();
 ?>