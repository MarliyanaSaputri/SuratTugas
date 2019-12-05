<?php
//extending class fpdf
class pdf extends FPDF{
	function letak($gambar){
		//memasukkan gambar untuk header
		$this->Image($gambar,18,10,20,25);
		//menggeser posisi sekarang
	}
	function judul($teks1, $teks2, $teks3, $teks4, $teks5, $teks6){
		$this->Cell(25);
		$this->SetFont('Times','','12');
		$this->Cell(0,5,$teks1,0,1,'C');
		$this->Cell(25);
		$this->SetFont('Times','B','15');
		$this->Cell(0,5,$teks2,0,1,'C');
		$this->Cell(15);
		$this->SetFont('Times','','12');
		$this->Cell(0,5,$teks3,0,1,'C');
		$this->Cell(25);
		$this->SetFont('Times','','12');
		$this->Cell(0,5,$teks4,0,1,'C');
		$this->Cell(25);
		$this->SetFont('Times','','12');
		$this->Cell(0,5,$teks5,0,1,'C');
		$this->Cell(25);
		$this->SetFont('Times','UB','12');
		$this->Cell(0,5,$teks6,0,1,'C');
	}
	
	function judul2($teks,$teks1,$teks2){
		$this->Ln(5);
		$this->SetFont('Times','UB',12);
		$this->Cell(0,5,$teks,0,1,'C');
		$this->SetFont('Times','B',12);
		$this->Cell(0,5,$teks1.$teks2 ,0,1,'C');
	}
	
	function judul3(){
		$this->Ln(5);
		$this->SetFont('Times','B',12);
		$this->Cell(0,5,'M E M E R I N T A H K A N',0,1,'C');
	}
	
	function dasar(){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(17,60);
		$this->Cell(0,5,'Dasar'  ,0,1,'L');
		$this->SetXY(15,60);
		$this->Cell(38);
		$this->MultiCell(130,5,': 1. ','J');
		$this->SetXY(20,60);
		$this->Cell(40);
		$this->MultiCell(130,5,'Peraturan Daerah Provinsi Jawa Timur No.11 Tahun 2018 Tanggal 28 Desember 2018 tentang Anggaran Pendapatan dan Belanja Daerah (APBD Tahun Anggaran 2019).','J');
		$this->SetXY(15,75);
		$this->Cell(40);
		$this->MultiCell(130,5,'2. ','J');
		$this->SetXY(20,75);
		$this->Cell(40);
		$this->MultiCell(130,5,'Peraturan Gubernur Jawa Timur Nomor : 128 Tahun 2018 Tanggal Desember 2018 tentang Anggaran Pendapatan dan Belanja Daerah Provinsi Jawa Timur Tahun Anggaran 2019.');
		$this->SetXY(15,90);
		$this->Cell(40);
		$this->MultiCell(130,5,'3. ','J');
		$this->SetXY(20,90);
		$this->Cell(40);
		$this->MultiCell(130,5,'Keputusan Gubernur Jawa Timur Nomor : 903/279/203.2/2018 Tanggal 31 Desember 2018 tentang Penetapan Dokumen Pelaksanaan Anggaran Satuan Kerja Perangkat Daerah (DPA-SKPD) Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2019. ','J');
	}
	
	function kepada($nama,$NIP,$pangkat,$golongan,$jabatan){

		$no  = 0;
		$had1 = $NIP;

		$tag = explode(",", $had1);
		foreach($tag as $t):

		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(17,125);
		$this->Cell(0,5,'Kepada'  ,0,1,'L');
		$this->SetXY(15,125);
		$this->Cell(40);
		$this->MultiCell(130,5,':	'.'		Nama','J');
		$this->SetXY(50,125);
		$this->Cell(40);
		$this->MultiCell(130,5,': '.$nama,'J');


		$this->SetXY(17,132);
		$this->Cell(40);
		$this->MultiCell(130,5,''.'		NIP','J');
		//$this->SetXY(50,132);
		//$this->Cell(40);
		//$this->MultiCell(130,5,': '. $nip,'J');
		//$this->SetXY(17,139);
		//$this->Cell(40);

		if($had1==$no++){
			$this->SetXY(50,132);
			$this->Cell(40);
			$this->MultiCell(130,5,': '.$no.". ".$t,'J');
		} else{
			$this->SetXY(50,136);
			$this->Cell(40);
			$this->MultiCell(130,5,'  '.$no.". ".$t,'J');
			
			$this->SetXY(21,35);
			$this->Cell(40)
		}


		$this->MultiCell(130,5,''.'		Pangkat/Gol','J');
		$this->SetXY(50,139);
		$this->Cell(40);
		$this->MultiCell(130,5,': '.$pangkat. ' - '.$golongan,'J');
		$this->SetXY(17,146);
		$this->Cell(40);
		$this->MultiCell(130,5,''.'		Jabatan','J');
		$this->SetXY(50,146);
		$this->Cell(40);
		$this->MultiCell(100,5,': '.$jabatan,'J');

		endforeach;
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
	
	function body1($teks){	
		$this->Cell(30);
		$this->SetFont('Times','',12);
		for ($i=0;$i < count($teks);$i++)
		$this->MultiCell(100,5,$teks[$i]);
	}

	function ttd($tgl_pembuatan){
		$this->Ln(5);
		$this->SetXY(15,190);
		$this->Cell(95);
		$this->Cell(0,5,'Surabaya, '.$tgl_pembuatan,0,1,'L');
		$this->Cell(80);
		$this->Cell(0,5,'KEPALA DINAS KOMUNIKASI INFORMATIKA',0,1,'L');
		$this->Cell(100);
		$this->Cell(0,5,'PROVINSI JAWA TIMUR',0,1,'L');	
	}

	function kepala($namakp,$pangkatkp,$nipkp){
		$this->Ln(25);
		$this->Cell(100);
		$this->SetFont('Times','UB',12);
		$this->Cell(0,5,$namakp,0,1,'L');
		$this->SetFont('Times','',12);
		$this->Cell(70);
		$this->Cell(0,5,$pangkatkp,0,1,'C');
		$this->Cell(100);
		$this->Cell(0,5,'NIP. '.$nipkp,0,1,'L');
	 }
	}

//instantisasi objek
$pdf=new pdf();
//properti dokumen
$pdf->SetAuthor('DISKOMINFOJATIM');
$pdf->SetTitle('SURAT PERINTAH TUGAS');
//Mulai dokumen
$pdf->AddPage('P', 'A4');
//meletakkan gambar
 $pdf->letak('asset/img/jatim2.jpg');
//meletakkan judul disamping logo diatas
$pdf->judul('PEMERINTAH PROVINSI JAWA TIMUR', 'DINAS KOMUNIKASI DAN INFORMATIKA',' Jl.A. Yani No. 242 - 244 Surabaya, Telp. (031) 8294608, Fax. (031) 8294517','Website : kominfo.jatimprov.go.id', 'Email : kominfo@jatimprov.go.id','SURABAYA 60235');
$pdf->judul2('SURAT  PERINTAH  TUGAS','Nomor :',$no_st);

//isi
$pdf->dasar();
$pdf->judul3();
$pdf->kepada($nama,$NIP,$pangkat,$golongan,$jabatan);
$pdf->tujuan('Untuk',$nama_tugas);

//tanda tangan kepbag
$pdf->ttd($tgl_pembuatan);
$pdf->kepala($namakp,$pangkatkp,$nipkp);
$date = date('d-M-Y  h:i:s');
//$pdf->legalitas('printed on: '.$date.' by '.$nama.' '.$id );
$pdf->Output('a'.'.pdf','I');
?>