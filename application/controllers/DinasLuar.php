<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  DinasLuar extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
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
		 'isi' =>'dinasluar/formtmb'
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
		$tgl_pel = $this->input->post('tgl_pelaksanaan');
		//$tgl_pel =  substr($tgl_pel,6,4) . '-'.substr($tgl_pel,3,2) . 
	//'-'.substr($tgl_pel,0,2) ;
		$tgl_akhir = $this->input->post('tgl_akhir');
		//$tgl_akhir =  substr($tgl_akhir,6,4) . '-'.substr($tgl_akhir,3,2) . 
	//'-'.substr($tgl_akhir,0,2) ;
		$hadir = $this->input->post('peserta_hadir');
		$hadir2 = $this->input->post('hadir2');
		$hadir3 = $this->input->post('hadir3');
		$hadir4 = $this->input->post('hadir4');
		$daerah = $this->input->post('daerah_tujuan');
		$bahas = $this->input->post('bahasan');
		$lain = $this->input->post('lain-lain');
		$tgl_buat = $this->input->post('tgl_pembuatan');
		//$tgl_buat =  substr($tgl_buat,6,4) . '-'.substr($tgl_buat,3,2) . 
	//'-'.substr($tgl_buat,0,2) ;
 
			$data = array(   		//data yang akan ditambah pada table 
				'id_dl' => $id_dl,
				'no_st' => $nost,
				'NIP' => $nip,
				'maksud_tujuan' => $maksud,
				'tgl_pelaksanaan' => $tgl_pel,
				'tgl_akhir' => $tgl_akhir,
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
		$tgl_pel = $this->input->post('tgl_pelaksanaan');
		$tgl_pel =  substr($tgl_pel,6,4) . '-'.substr($tgl_pel,3,2) . 
	'-'.substr($tgl_pel,0,2) ;
		$tgl_akhir = $this->input->post('tgl_akhir');
		$tgl_akhir =  substr($tgl_akhir,6,4) . '-'.substr($tgl_akhir,3,2) . 
	'-'.substr($tgl_akhir,0,2) ;
		$hadir = $this->input->post('peserta_hadir');
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
			'tgl_pelaksanaan' => $tgl_pel,
			'tgl_akhir' => $tgl_akhir,
			'peserta_hadir' => $hadir,
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


}