<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Pegawai extends CI_Controller {

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
		check_not_login();
		check_admin();
		$this->load->model('daftar_model');
			
		
	}
	public function index()
	{
		$tabel = "tb_pegawai";//ambil table  
		$tabeljoin = "tb_bidang";
		$wherejoin= "kd_bid";
		$data=array('title'=>'Dasbor',
		'daftarpegawai' => $this->daftar_model->get_all($tabel,$tabeljoin,$wherejoin),
		//'daftarbd' => $this->daftar_model->cari_data($tabel1,$where),
		 'isi' =>'pegawai/pegawai_view'
		 );

		$this->load->view('layout/wrapper',$data);
		//$this->load->view('welcome_message');
	}
}
