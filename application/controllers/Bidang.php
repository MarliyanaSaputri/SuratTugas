<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Bidang extends CI_Controller {

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
		$tabel = "tb_bidang";//ambil table  
		$data=array('title'=>'Dasbor',
		'daftarbidang' => $this->daftar_model->daftar_view($tabel),
		 'isi' =>'bidang/bidang_data'
		 );
		
		$this->load->view('layout/wrapper',$data);
		//$this->load->view('welcome_message');
	}
}
