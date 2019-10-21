<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Surattugas extends CI_Controller {
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

	public function index()
	{
		$tabel = "tb_st";//ambil table 
		$tabeljoin = "tb_pegawai";
		$wherejoin="NIP"; 
		$data=array('title'=>'Dasbor',
		'daftarst' => $this->daftar_model->get_all($tabel,$tabeljoin,$wherejoin),
		 'isi' =>'spt/dataspt'
		 );
		$this->load->view('layout/wrapper',$data);
	}

	public function formtambahspt()
	{
		$tabel = "tb_st";
		$tabel1 = "tb_bidang";
		$tabel2 = "tb_tugas";
		$tabel3 = "tb_pegawai";
		//ambil table  
		$data=array('title'=>'Dasbor',
		'datast' => $this->daftar_model->daftar_view($tabel),
		'databd' => $this->daftar_model->daftar_view($tabel1),
		'datatugas' => $this->daftar_model->daftar_view($tabel2),
		'datapegawai' => $this->daftar_model->daftar_view($tabel3),
		 'isi' =>'spt/tambahspt'
		 );

		$this->load->view('layout/wrapper',$data);
		
	}

	public function prosestambah()
	{	
		$notugas = $this->input->post('kd_tugas');
		$kd_bid = $this->input->post('kd_bid');
		$no_st = $this->input->post('no_st');
		$nip = $this->input->post('NIP');
		$nama_tugas = $this->input->post('nama_tugas');
		$tgl_pembuatan = $this->input->post('tgl_pembuatan');
		$tgl_pembuatan =  substr ($tgl_pembuatan ,6,4) . '-'.substr ($tgl_pembuatan,3,2) . 
		'-'.substr ($tgl_pembuatan ,0,2) ;

	$data = array(  //data yang akan ditambah pada table 
		'no_st' =>	$no_st,
		'NIP'=>$nip,
		'kd_bid'=>$kd_bid,
		'nama_tugas' => $nama_tugas,
		'tgl_pembuatan' => $tgl_pembuatan
	);
		$this->daftar_model->insert_data($data ,'tb_st');
		redirect(base_url('surattugas'));
	}

	public function delete($id)
	{	
		$id =$id;
		$tabel = "tb_st";//ambil table  
		$where = array('id_st'=>$id); //id yg ingin dihapus
		$hapus=$this->daftar_model->delete_data($where,$tabel);
	 //tampilkan daftar 
	redirect(base_url('surattugas'));
	 }

	public function update_st($nourut)
	{
		$tabel = "tb_st";
		$tabel1 = "tb_bidang";
		$tabel2 = "tb_tugas";
		$tabel3 = "tb_pegawai";
		$wherejoin ="NIP"; 
		$where = array('id_st'=>$nourut); 
		$id=$nourut;
		//ambil table  
		$data=array('title'=>'Dasbor',
		'pegawai' => $this->daftar_model->get_cariall($tabel,$tabel3,$wherejoin,$id),
		'datast' => $this->daftar_model->cari_data($tabel,$where),
		'databd' => $this->daftar_model->daftar_view($tabel1),
		'datatugas' => $this->daftar_model->daftar_view($tabel2),
		'datapegawai' => $this->daftar_model->daftar_view($tabel3),
		 'isi' =>'spt/updatespt'
		 );
		$this->load->view('layout/wrapper',$data);
		//$this->load->view('welcome_message');
	}

	public function proses_update($nourut)
	{
		$id =$nourut;
		$kd_bid= $this->input->post('kd_bid');
		$no_st=$this->input->post('no_st');
		$nip = $this->input->post('NIP');
		$nama_tugas=$this->input->post('nama_tugas');
		$tgl_pembuatan=$this->input->post('tgl_pembuatan');
		$tgl_pembuatan =  substr ($tgl_pembuatan ,6,4) . '-'.substr ($tgl_pembuatan,3,2) . 
		'-'.substr ($tgl_pembuatan ,0,2) ;
	$data = array(
		'kd_bid'=>$kd_bid,
		'no_st'=>$no_st,
		'NIP'=>$nip,
		'nama_tugas'=>$nama_tugas,
		'tgl_pembuatan'=>$tgl_pembuatan
	);
	$where = array(
		'id_st' => $id
    );
    $this->daftar_model->update_data($where,$data ,'tb_st');
	redirect('surattugas');
	}

	public function cetak_spt($nourut)
	{
		$tabel = "tb_st";	
		$tabeljoin = "tb_pegawai";
		$wherejoin ="NIP"; 
		$wherejb = array('jabatan'=>'Kepala Bidang Aplikasi Informatika');
		$where = array('id_st'=>$nourut);
		$id= $nourut; 
		$cek1= $this->daftar_model->get_cariall($tabel,$tabeljoin,$wherejoin,$id);
		$cek=$this->daftar_model->cari_data($tabel,$where);
		$cek2=$this->daftar_model->cari_data($tabeljoin,$wherejb);
			foreach ($cek as $result)
			{
				$no_st=$result['no_st'];
				$NIP= $result['NIP'];
				$kd_bid=$result['kd_bid'];
				$tgl_pembuatan=$result['tgl_pembuatan'];
				$tgl_pembuatan =  date("d F Y",strtotime($tgl_pembuatan));
				$nama_tugas=$result['nama_tugas'];
			}

			foreach ($cek1 as $result)
			{
				$nip=$NIP;
				$nama=$result['nama'];
				$jabatan=$result['jabatan'];
				$pangkat=$result['pangkat'];
				$golongan=$result['golongan'];
			}

			foreach ($cek2 as $result)
			{
				$nipkp=$result['NIP'];
				$namakp=$result['nama'];
				$pangkatkp=$result['pangkat'];
			}

			$data=array('id_st'=>$nourut,
				'no_st'=>$no_st,
				'NIP'=>$NIP,
				'kd_bid'=>$kd_bid,
				'tgl_pembuatan'=>$tgl_pembuatan,
				'nama_tugas'=>$nama_tugas,
				'nama'=>$nama,
				'jabatan'=>$jabatan,
				'pangkat'=>$pangkat,
				'golongan'=>$golongan,
				'nipkp'=>$nipkp,
				'namakp'=>$namakp,
				'pangkatkp'=>$pangkatkp
			);
			$this->load->view('spt/cetak',$data);
	}
}
