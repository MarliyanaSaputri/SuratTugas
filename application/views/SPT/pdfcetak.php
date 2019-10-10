<?php
require('WriteHTML.php');

$pdf=new PDF_HTML();

$pdf->AddPage();
$uk_atas=10;
$uk_samping=40;
$pdf->SetXY(20,$uk_atas+80);
$pdf->SetFont('Arial');

$pdf->WriteHTML('<p align="justify">Ini adalah paragraf rata kanan kiri (justify). Sekilas hampir sama dengan paragraf rata kiri, tetapi itu berbeda loh. Kalau kontennya pendek mungkin terlihat sama, tetapi kalau kontennya panjang akan terlihat bedanya
Sekilas hampir sama dengan paragraf rata kiri, tetapi itu berbeda loh. Kalau kontennya pendek mungkin terlihat sama, tetapi kalau kontennya panjang akan terlihat bedanya.</p>
2. Peraturan Gubernur Jawa Timur Nomor : 128 Tahun 2018 tanggal 
28 Desember 2018 tentang Anggaran Pendapatan dan Belanja Daerah 
Provinsi Jawa Timur Tahun Anggaran 2019</p>;

and add a horizontal rule:<br><hr>');



//$pdf->AddPage('P' , array(220,330));
$pdf->SetFont('Arial','',12);
//$pdf->EAN13(80,40,'270319982200');
//$pdf->Code39(80, 40, 'Mar27');                
$pdf->SetXY($uk_samping,$uk_atas);
$pdf->Cell(140,5,'PEMERINTAH PROVINSI JAWA TIMUR',0,0,'C');


$pdf->SetFont('Arial','B',16);
$pdf->SetXY($uk_samping,$uk_atas+5);
$pdf->Cell(140,5,'DINAS KOMUNIKASI DAN INFORMATIKA',0,0,'C');


$pdf->SetFont('Arial','',12);
$pdf->SetXY($uk_samping,$uk_atas+10);
$pdf->Cell(140,8,' Jl.A. Yani No.242-244 Surabaya,Telp. (031) 8294608,Fax. (031) 8294517',0,0,'C');
$pdf->SetXY($uk_samping,$uk_atas+15);
$pdf->Cell(140,8,' Website : kominfo.jatimprov.go.id',0,0,'C');
$pdf->SetXY($uk_samping,$uk_atas+20);
$pdf->Cell(140,8,' Email : kominfo@jatimprov.go.id',0,0,'C');
$pdf->SetFont('Arial','UB',12);
$pdf->SetXY($uk_samping,$uk_atas+25);
$pdf->Cell(140,8,'SURABAYA 60235',0,0,'C');



$pdf->SetFont('Arial','UB',16);
$pdf->SetXY($uk_samping,$uk_atas+40);
$pdf->Cell(140,8,'SURAT  PERINTAH  TUGAS',0,0,'C');


//NOMOR ST
$pdf->SetFont('Arial','B',13);
$pdf->SetXY(70,$uk_atas+45);
$pdf->Cell(140,8,'Nomor : ',0,0,'L');


//dasar-dasar
$pdf->SetFont('Arial','',12);
$pdf->SetXY(20,$uk_atas+60);
$pdf->Cell(140,8,'Dasar ',0,0,'L');


$pdf->Output();
?>
