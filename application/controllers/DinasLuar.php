<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  DinasLuar extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		check_not_login();
		$this->load->model('daftar_model');
	}

	public function index()
	{
		$tabel = "tb_dl";

		$data = array('title'=>'Dasbor',
		'daftardl' => $this->daftar_model->daftar_view($tabel),
		 'isi' =>'dinasluar/dl_view'
		 );

		$this->load->view('layout/wrapper',$data);
	}

	public function tambahdl()
	{
		$tabel = "tb_st";
		
		$data=array('title'=>'TambahDL',
		'tambahdl' => $this->daftar_model->daftar_view($tabel),
		 'isi' =>'dinasluar/tambahdl_view'
		 );

		$this->load->view('layout/wrapper',$data);
	}

	public function formtambah($edit)
	{
		$id = $edit;
		$tabel = "tb_st";//ambil table  
		$where = array('id_st' => $id);

		$data=array('title'=>'FormTambahDL',
		'daftarst' => $this->daftar_model->cari_data($tabel,$where),
		 'isi' =>'dinasluar/formtmb1'
		 );

		$this->load->view('layout/wrapper',$data);
	}
	
	public function prosestambah($edit)
	{	
		$id_st = $edit;

		$id_dl = $this->input->post('id_dl');
		$nost = $this->input->post('no_st');
		$nip = $this->input->post('NIP');
		$maksud = $this->input->post('maksud_tujuan');
		$range_tgl = $this->input->post('tgl_pelaksanaan');
		$range_tgl =  substr($range_tgl,6,4) . '-'.substr($range_tgl,3,2) . 
	'-'.substr($range_tgl,0,2) ;
		$range_tgl2 = $this->input->post('tgl_pelaksanaan');
		$range_tgl2 =  substr($range_tgl2,17,4) . '-'.substr($range_tgl2,14,2) . 
	'-'.substr($range_tgl2,11,2) ;
		$hadir = $this->input->post('peserta_hadir');
		$hadir2 = $this->input->post('hadir2');
		$hadir3 = $this->input->post('hadir3');
		$hadir4 = $this->input->post('hadir4');
		$daerah = $this->input->post('daerah_tujuan');
		$bahas = $this->input->post('bahasan');
		$lain = $this->input->post('lain-lain');
		$tgl_buat = $this->input->post('tgl_pembuatan');
		$tgl_buat =  substr($tgl_buat,6,4) . '-'.substr($tgl_buat,3,2) . 
	'-'.substr($tgl_buat,0,2) ;
 
			$data = array(   		//data yang akan ditambah pada table 
				'id_dl' => $id_dl,
				'no_st' => $nost,
				'NIP' => $nip,
				'maksud_tujuan' => $maksud,
				'tgl_pelaksanaan' => $range_tgl,
				'tgl_akhir' => $range_tgl2,
				'peserta_hadir' => $hadir,
				'hadir2' => $hadir2,
				'hadir3' => $hadir3,
				'hadir4' => $hadir4,
				'daerah_tujuan' => $daerah,
				'bahasan' => $bahas,
				'lain-lain' => $lain,
				'tgl_pembuatan' => $tgl_buat
			);

			$this->daftar_model->insert_data($data,'tb_dl');
		
		redirect('DinasLuar');
	}

	public function delete($edit)
	{	
		$id = $edit;
		$tabel = "tb_dl"; //ambil table  
		$where = array('id_dl' => $id); //id yg ingin dihapus
		
		$hapus=$this->daftar_model->delete_data($where,$tabel);
		 //tampilkan daftar 

		redirect('DinasLuar');
	}

	public function update($edit)
	{	
		$id = $edit;
		$tabel = "tb_dl";//ambil table  
		$where = array('id_dl' => $id);
		
		//tampilkan form edit
		$data=array('title'=>'Edit DL',
			'daftardl' => $this->daftar_model->cari_data($tabel,$where),			
			'isi' => 'dinasluar/form_edit'
		);
		$this->load->view('layout/wrapper',$data);
	}

	public function proses_edit($edit)
	{	
		$id = $edit;
		
		//$id_dl = $this->input->post('id_dl');
		$nost = $this->input->post('no_st');
		$nip = $this->input->post('NIP');
		$maksud = $this->input->post('maksud_tujuan');
		$range_tgl = $this->input->post('tgl_pelaksanaan');
		$range_tgl =  substr($range_tgl,6,4) . '-'.substr($range_tgl,3,2) . 
	'-'.substr($range_tgl,0,2) ;
	//	$range_tgl = $this->input->post('tgl_akhir');
	//	$range_tgl =  substr($range_tgl,6,4) . '-'.substr($range_tgl,3,2) . 
	//'-'.substr($range_tgl,0,2) ;
		$hadir = $this->input->post('peserta_hadir');
		$hadir2 = $this->input->post('hadir2');
		$hadir3 = $this->input->post('hadir3');
		$hadir4 = $this->input->post('hadir4');
		$daerah = $this->input->post('daerah_tujuan');
		$bahas = $this->input->post('bahasan');
		$lain = $this->input->post('lain-lain');
		$tgl_buat = $this->input->post('tgl_pembuatan');
		$tgl_buat =  substr($tgl_buat,6,4) . '-'.substr($tgl_buat,3,2) . 
	'-'.substr($tgl_buat,0,2) ;

		$data = array(   
			//'id_dl'	=> $id,	//data yang akan ditambah pada table 
			'no_st' => $nost,
			'NIP' => $nip,
			'maksud_tujuan' => $maksud,
			'tgl_pelaksanaan' => $range_tgl,
			//'tgl_akhir' => $range_tgl,
			'peserta_hadir' => $hadir,
			'hadir2' => $hadir2,
			'hadir3' => $hadir3,
			'hadir4' => $hadir4,
			'daerah_tujuan' => $daerah,
			'bahasan' => $bahas,
			'lain-lain' => $lain,
			'tgl_pembuatan' => $tgl_buat
		);

		$where = array(
			'id_dl' => $id
		);
		
		$this->daftar_model->update_data($where,$data,'tb_dl');
		redirect('DinasLuar');
	}

	public function cetak()
	{


		$tabel = "tb_dl";	
		$tabeljoin = "tb_pegawai";
		$wherejoin ="NIP"; 
		$wherejb = array('jabatan');
		$where = array('id_dl'=>$no); 
		$id= $no; 
		$cek1= $this->daftar_model->get_cariall($tabel,$tabeljoin,$wherejoin,$id);
		$cek=$this->daftar_model->cari_data($tabel,$where);
		$cek2=$this->daftar_model->cari_data($tabeljoin,$wherejb);
			foreach ($cek as $result)
			{
				$no_st=$result['no_st'];
				$NIP= $result['NIP'];
				$tgl_pelaksanaan = $result['tgl_pelaksanaan'];
				$tgl_akhir = $result['tgl_akhir'];
				$maksud_tujuan = $result['maksud_tujuan'];
				$daerah_tujuan = $result['daerah_tujuan'];
				$peserta_hadir = $result['peserta_hadir'];
				$bahasan = $result['bahasan'];
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

			$data=array('id_dl'=>$no,
				'no_st'=>$no_st,
				'NIP'=>$NIP,
				'tgl_pelaksanaan'=>$tgl_pelaksanaan,
				'tgl_akhir'=>$tgl_akhir,
				'bahasan'=>$bahasan,
				'maksud_tujuan'=>$maksud_tujuan,
				'peserta_hadir'=>$peserta_hadir,
				'daerah_tujuan'=>$daerah_tujuan,
				'nama'=>$nama,
				'jabatan'=>$jabatan,
				'pangkat'=>$pangkat,
				'golongan'=>$golongan
				
			);

			$this->load->view('dinasluar/cetak',$data);
	}


}
