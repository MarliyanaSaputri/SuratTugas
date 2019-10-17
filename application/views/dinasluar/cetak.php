<?php
//extending class fpdf
class pdf extends FPDF{
	
	function judul2($teks,$teks1,$teks2){
		$this->Ln(5);
		$this->SetFont('Times','UB',12);
		$this->Cell(0,5,$teks,0,1,'C');
		$this->SetFont('Times','B',12);
		$this->Cell(160,7,$teks1.$teks2,0,1,'C');
	}
	
	function dasar(){
		$this->SetFont('Times','',12);
		$this->SetXY(14,35);
		$this->Cell(0,5,'I'  ,0,1,'L');
		$this->SetXY(24,35);
		$this->Cell(0,5,'Dasar'  ,0,1,'L');
		$this->SetXY(20,35);
		$this->Cell(30);
		$this->MultiCell(130,5,':   1. ','J');
		$this->SetXY(21,35);
		$this->Cell(40);
		$this->MultiCell(130,5,'Peraturan Daerah Provinsi Jawa Timur No.11 Tahun 2018 Tanggal 28 Desember 2018 tentang Anggaran Pendapatan dan Belanja Daerah  Tahun Anggaran 2019;',76,'J');
		$this->SetXY(14,37);
		$this->Cell(40);
		$this->MultiCell(130,32,'2. ','J');
		$this->SetXY(21,50);
		$this->Cell(40);
		$this->MultiCell(130,5,'Peraturan Gubernur Jawa Timur Nomor : 128 Tahun 2018 Tanggal Desember 2018 tentang Anggaran Pendapatan dan Belanja Daerah Provinsi Jawa Timur Tahun Anggaran 2019.');
		$this->SetXY(14,65);
		$this->Cell(40);
		$this->MultiCell(130,5,'3. ','J');
		$this->SetXY(21,65);
		$this->Cell(40);
		$this->MultiCell(130,5,'Keputusan Gubernur Jawa Timur Nomor : 903/279/203.2/2018 Tanggal 31 Desember 2018 tentang Penetapan Dokumen Pelaksanaan Anggaran Satuan Kerja Perangkat Daerah (DPA-SKPD) Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2019. ','J');
		$this->SetXY(14,85);
		$this->Cell(40);
		$this->MultiCell(130,5,'4. ','J');
		$this->SetXY(21,85);
		$this->Cell(40);
		$this->MultiCell(130,5,'Peraturan Gubernur Jawa Timur Nomor : 92 Tahun 2018 Tanggal 21 September 2018 tentang Pedoman Kerja dan Pelaksanaan Tugas Pemerintah Daerah Provinsi Jawa Timur Tahun 2019. ','J');
	}

	function maksud($maksud_tujuan){
		$this->SetFont('Times','',12);
		$this->SetXY(14,110);
		$this->Cell(0,5,'II'  ,0,1,'L');
		$this->SetXY(24,110);
		$this->Cell(0,5,'Maksud dan '  ,0,1,'L');
		$this->SetXY(24,116);
		$this->Cell(0,5,'Tujuan '  ,0,1,'L');
		$this->SetXY(20,110);
		$this->Cell(30);
		$this->MultiCell(130,5,': ','J');
		$this->SetXY(25,110);
		$this->Cell(30);
		$this->MultiCell(130,5,$maksud_tujuan,'J');
		$this->SetXY(21,35);
		$this->Cell(40);
	
		
	}

	function tugas($nama){
		$this->SetFont('Times','',12);
		$this->SetXY(14,130);
		$this->Cell(0,5,'III'  ,0,1,'L');
		$this->SetXY(24,130);
		$this->Cell(0,5,'Yang'  ,0,1,'L');
		$this->SetXY(24,131);
		$this->Cell(0,14,'di Tugaskan '  ,0,1,'L');
		$this->SetXY(20,130);
		$this->Cell(30);
		$this->MultiCell(130,5,': '.$nama,'J');
		$this->SetXY(21,35);
		$this->Cell(40);
		
	}

	function daerah($daerah_tujuan){
		$this->SetFont('Times','',12);
		$this->SetXY(14,150);
		$this->Cell(0,5,'IV'  ,0,1,'L');
		$this->SetXY(24,150);
		$this->Cell(0,5,'Daerah Tujuan'  ,0,1,'L');
		$this->SetXY(20,150);
		$this->Cell(30);
		$this->MultiCell(130,5,': '.$daerah_tujuan,'J');
		$this->SetXY(21,35);
		$this->Cell(40);
		
	}

		function jadwal($tgl_pelaksanaan,$tgl_akhir){
		$this->SetFont('Times','',12);
		$this->SetXY(14,165);
		$this->Cell(0,5,'V'  ,0,1,'L');
		$this->SetXY(24,165);
		$this->Cell(0,5,'Jadwal Waktu'  ,0,1,'L');
		$this->SetXY(20,165);
		$this->Cell(30);
		$this->MultiCell(130,5,': '.$tgl_pelaksanaan,'-'.$tgl_akhir,'J');
		$this->SetXY(21,35);
		$this->Cell(40);
		
	}

	function hadir($peserta_hadir){
		$this->SetFont('Times','',12);
		$this->SetXY(14,182);
		$this->Cell(0,5,'VI'  ,0,1,'L');
		$this->SetXY(24,182);
		$this->Cell(0,5,'Hadir Dalam '  ,0,1,'L');
		$this->SetXY(24,188);
		$this->Cell(0,5,'Acara '  ,0,1,'L');
		$this->SetXY(20,182);
		$this->Cell(30);
		$this->MultiCell(130,5,': '.$peserta_hadir,'J');
		$this->SetXY(21,35);
		$this->Cell(40);
	
	}

	function bahasan($bahasan){
		$this->SetFont('Times','',12);
		$this->SetXY(14,202);
		$this->Cell(0,5,'VII'  ,0,1,'L');
		$this->SetXY(24,202);
		$this->Cell(0,5,'Bahasan '  ,0,1,'L');
		$this->SetXY(20,202);
		$this->Cell(30);
		$this->MultiCell(130,5,': '.$bahasan,'J');
		$this->SetXY(21,35);
		$this->Cell(40);
	
	}
	

	function petunjuk(){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(17,30);
		$this->Cell(0,5,'VIII   Petunjuk Arahan',0,1,'L');
		$this->SetXY(15,30);
		$this->Cell(50);
		$this->Cell(130,5,': ','J');
		$this->SetXY(28,37);
		$this->Cell(0,5,'Saran dan',0,1,'L');
		$this->SetXY(28,42);
		$this->Cell(0,5,'Tindakan',0,1,'L');
		$this->SetXY(37,37);
		$this->Cell(28);
		$this->Cell(130,5,': ','J');
	}
	
	function lain_lain($lain){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(17,52);
		$this->Cell(0,5,'X        Lain-Lain',0,1,'L');
		$this->SetXY(37,52);
		$this->Cell(28);
		$this->Cell(130,5,': ','J');
		$this->SetXY(42,52);
		$this->Cell(28);
		$this->MultiCell(130,5,$lain,0,1,'L');
	}
	
	function penanggung($nama,$nip){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->SetXY(17,230);
		$this->Cell(0,5,'XI    Penanggung Jawab',0,1,'L');
		$this->SetXY(37,230);
		$this->Cell(28);
		$this->Cell(130,5,': ','J');
		$this->SetXY(28,260);
		$this->Cell(0,5,$nama,0,1,'L');
		$this->SetXY(28,266);
		$this->Cell(0,5,'NIP. '.$nip,0,1,'L');
	}

	function ttd($tgl_pembuatan){
		$this->Ln(5);
		$this->SetXY(32,240);
		$this->Cell(95);
		$this->Cell(0,5,'Surabaya ,  '.$tgl_pembuatan,0,1,'L');
		$this->SetXY(24,270);
		$this->Cell(100);
		$this->Cell(0,5,'Tanda Tangan        ......................',0,1,'L');	
	}


	
}

//instantisasi objek
$pdf=new pdf();
//properti dokumen
$pdf->SetAuthor('DISKOMINFOJATIM');
$pdf->SetTitle('LAPORAN DINAS LUAR');
//Mulai dokumen
$pdf->AddPage('P', 'A4');
//meletakkan gambar

//meletakkan judul disamping logo diatas

 $pdf->judul2('LAPORAN DINAS LUAR','Nomor :',$no_st);

// //isi
$pdf->dasar();
$pdf->maksud($maksud_tujuan);
$pdf->tugas($nama);
$pdf->daerah($daerah_tujuan);
$pdf->jadwal($tgl_pelaksanaan,$tgl_akhir);
$pdf->hadir($peserta_hadir);
$pdf->bahasan($bahasan);
$pdf->petunjuk();
$pdf->lain_lain($lain);
$pdf->penanggung($nama,$nip);
$pdf->ttd($tgl_pembuatan);

$date = date('d-M-Y  h:i:s');

//$pdf->kepala();
//$pdf->legalitas('printed on: '.$date.' by '.$nama.' '.$id );

$pdf->Output('laporan_dinas_luar'.'.pdf','I');
?>
}