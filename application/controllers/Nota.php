<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Nota extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() 
	{
		parent::__construct();

		$this->load->model('daftar_model');
		check_not_login();
		$this->load->config('pdf_config');
		$this->load->library('fpdf');
		$this->load->library('PDF_Code128');
		define ('FPDF_FONTPATH',$this->config->item('fonts_path'));
			
		
	}
	public function nota()
	{
		//$tabel = "tb_bidang";//ambil table  
		$data=array('title'=>'Dasbor',
		//'daftarbidang' => $this->daftar_model->daftar_view($tabel),
		 'isi' =>'nota/nota_view'
		 );
		
		$this->load->view('layout/wrapper',$data);
		//$this->load->view('welcome_message');
	}
	public function cetak()
	{$tabel = "tb_st";	
		$tabeljoin = "tb_pegawai";
		$wherejoin ="NIP";
		$nourut=1; 
		// $wherejb=array('jabatan'=>'Kepala Bidang Aplikasi Informatika');
		// $where = array('id_st'=>$nourut);
		// $id= $nourut; 
		// $cek1= $this->daftar_model->get_cariall($tabel,$tabeljoin,$wherejoin,$id);
		// $cek=$this->daftar_model->cari_data($tabel,$where);
		// $cek2=$this->daftar_model->cari_data($tabeljoin,$wherejb);
		// 	foreach ($cek as $result)
		// 	{
		// 		$no_st=$result['no_st'];
		// 		$NIP= $result['NIP'];
		// 		$kd_bid=$result['kd_bid'];
		// 		$tgl_pembuatan=$result['tgl_pembuatan'];
				
		// 		$tgl_pembuatan =  date("d F Y",strtotime($tgl_pembuatan));
		// 		$nama_tugas=$result['nama_tugas'];
		// 	}

		// 	foreach ($cek1 as $result)
		// 	{
		// 		$nip=$NIP;
		// 		$nama=$result['nama'];
		// 		$jabatan=$result['jabatan'];
		// 		$pangkat=$result['pangkat'];
		// 		$golongan=$result['golongan'];
		// 	}
		// 	foreach ($cek2 as $result)
		// 	{
		// 		$nipkp=$result['NIP'];
		// 		$namakp=$result['nama'];
		// 		$pangkatkp=$result['pangkat'];
				
			
		// 	}
		// 	$data=array('id_st'=>$nourut,
		// 		'no_st'=>$no_st,
		// 		'NIP'=>$NIP,
		// 		'kd_bid'=>$kd_bid,
		// 		'tgl_pembuatan'=>$tgl_pembuatan,
		// 		'nama_tugas'=>$nama_tugas,
		// 		'nama'=>$nama,
		// 		'jabatan'=>$jabatan,
		// 		'pangkat'=>$pangkat,
		// 		'golongan'=>$golongan,
		// 		'nipkp'=>$nipkp,
		// 		'namakp'=>$namakp,
		// 		'pangkatkp'=>$pangkatkp

			// );
			
			$this->load->view('Nota/cetak_nota');
	}
}
