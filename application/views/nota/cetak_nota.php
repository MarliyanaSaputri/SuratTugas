<?php
//extending class fpdf
class pdf extends FPDF{
	function letak($gambar){
		//memasukkan gambar untuk header
		$this->Image($gambar,18,10,20,25);
		//menggeser posisi sekarang
	}
	function judul($teks,$teks2){
		$this->Cell(10);
		$this->SetFont('Times','B','12');
		$this->Cell(0,5,$teks,0,1,'C');
		$this->Cell(10);
		$this->SetFont('Times','B','12');
		$this->Cell(0,5,$teks2,0,1,'C');
		
	}
	
	function judul2($teks,$teks1,$teks2){
		$this->Ln(5);
		$this->SetFont('Times','UB',12);
		$this->Cell(0,5,$teks,0,1,'C');
		$this->SetFont('Times','B',12);
		$this->Cell(0,5,$teks1.$teks2 ,0,1,'C');
	}
	
	function garis(){
		$this->SetLineWidth(0);
		$this->Line(30,20,180,20);
	}

	function judul3(){
		$this->Ln(5);
		$this->Cell(10);
		$this->SetFont('Times','UB',14);
		$this->Cell(0,5,'NOTA DINAS',0,1,'C');
	}
	
	function dasar(){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(5,100);
		$this->Cell(10);
		$this->MultiCell(170,7,'																			Sebagai upaya untuk mewujudkan tertib Penyelenggraan Kearsipan di lingkungan Dinas Kounikasi dan Informatika Provinsi Jawa Timur sebagaimana di amanahkan dalam pasal 47 ayat 1 dan 2 Peraturan Daerah Provinsi Jawa Timur Nomor 4 Tahun 2015 tentang Penyelenggraan Kearsipan, maka Dinas Komunikasi dan Informatika Provinsi Jawa Timur akan mengadakan Pembinaan Kearsipan yang dilaksanakan pada :','J');
	}

	function isi(){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(15,137);
		$this->Cell(0,5,'Hari / Tanggal'  ,0,1,'L');
		$this->SetXY(15,137);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(15,147);
		$this->Cell(0,5,'Pukul'  ,0,1,'L');
		$this->SetXY(15,147);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(15,157);
		$this->Cell(0,5,'Tempat'  ,0,1,'L');
		$this->SetXY(15,157);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
	}

	function Tugas(){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(5,170);
		$this->Cell(10);
		$this->MultiCell(170,7,'																			Sehubungan dengan hal tersebut, diharapkan agar para Kepala Bidang menugaskan 2 (dua) orang Staf Pengelola Kearsipan di Bidang untuk mengikuti acara tersebut.','J');
		
	}
	function penutup(){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(5,190);
		$this->Cell(10);
		$this->MultiCell(170,8,'																			Demikian atas kerjasama Saudara disampaikan terimakasih.','J');
		
	}
	
	function kepada(){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(15,40);
		$this->Cell(0,5,'Kepada'  ,0,1,'L');
		$this->SetXY(15,40);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(15,47);
		$this->Cell(0,5,'Dari'  ,0,1,'L');
		$this->SetXY(15,47);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(15,54);
		$this->Cell(0,5,'Tanggal'  ,0,1,'L');
		$this->SetXY(15,54);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(15,61);
		$this->Cell(0,5,'Nomor'  ,0,1,'L');
		$this->SetXY(15,61);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(15,68);
		$this->Cell(0,5,'Sifat'  ,0,1,'L');
		$this->SetXY(15,68);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(15,75);
		$this->Cell(0,5,'Lampiran'  ,0,1,'L');
		$this->SetXY(15,75);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(15,82);
		$this->Cell(0,5,'Perihal'  ,0,1,'L');
		$this->SetXY(15,82);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
			
	}

	function garis2(){
		$this->SetLineWidth(0.5);
		$this->Line(10,92,185,92);
	
	}
	
	function tujuan($teks,$teks2){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(17,160);
		$this->Cell(0,5,$teks  ,0,1,'L');
		$this->SetXY(15,160);
		$this->Cell(40);
		$this->MultiCell(130,5,':	','J');
		$this->SetXY(17,160);
		$this->Cell(40);
		$this->MultiCell(130,5,'		'.$teks2,'J');	
	}
	
	function ttd(){
		$this->Ln(5);
		$this->SetXY(15,205);
		
		$this->Cell(80);
		$this->Cell(0,5,'SEKRETARIS',0,1,'C');		
	}

	function kepala(){
		$this->Ln(15);
		$this->Cell(100);
		$this->SetFont('Times','UB',12);
		$this->Cell(0,5,'',0,1,'L');
		$this->SetFont('Times','',12);
		$this->Cell(70);
		$this->Cell(0,5,'Nama',0,1,'C');
		$this->Cell(70);
		$this->Cell(0,5,'Pangkat',0,1,'C');
		$this->Cell(110);
		$this->Cell(0,5,'NIP. ',0,1,'L');
	 }
	 function tembusan(){
		
		$this->Ln(10);
		$this->SetFont('Times','U',12);
		$this->SetXY(15,235);
		$this->Cell(0,5,'TEMBUSAN :'  ,0,1,'L');
		$this->SetFont('Times','',12);
		$this->SetXY(15,240);
		$this->MultiCell(70,5,'Yth. Bp. Kepala Dinas Prov. Jatim ','J');
		$this->SetXY(30,245);
		$this->MultiCell(60,5,'(sebagai laporan)','J');
		$this->SetLineWidth(0);
		$this->Line(30,250,75,250);
		
	 }
	
	}

//instantisasi objek
$pdf=new pdf();
//properti dokumen
$pdf->SetAuthor('DISKOMINFOJATIM');
$pdf->SetTitle('NOTA DINAS');
//Mulai dokumen
$pdf->AddPage('P', 'A4');
//meletakkan gambar
 //$pdf->letak('assets/image/jatim2.jpg');
//meletakkan judul disamping logo diatas
$pdf->judul('DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR ','SEKRETARIAT');
// //isi
$pdf->garis();
$pdf->judul3();
 $pdf->kepada();
 $pdf->garis2();
 $pdf->dasar();
 $pdf->isi();
 $pdf->tugas();
 $pdf->penutup();
 $pdf->ttd();
 $pdf->kepala();
 $pdf->tembusan();
// //tanda tangan kepbag
$date = date('d-M-Y  h:i:s');
//$pdf->legalitas('printed on: '.$date.' by '.$nama.' '.$id );
$pdf->Output('a'.'.pdf','I');
?>