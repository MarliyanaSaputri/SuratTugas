<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
// public function __construct() 
// 	{
// 		parent::__construct();
// 		$this->load->model('daftar_model');

// 		//$this->load->helper(array('url','download'));	
		
// 	}
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('daftar_model');
			
		
	}
	
	public function index()
	{
		$data=array('title'=>'Dasbor',
		 'isi' =>'dasbor/home'
		 );

		$this->load->view('layout/wrapper',$data);
		//$this->load->view('welcome_message');
	}

	public function bidang()
	{
		// $data=array('title'=>'Dasbor',
		// 'daftarbidang' => $this->daftar_model->daftar_bidang(),
		//  'isi' =>'bid_view'
		//  );

		// $this->load->view('layout/wrapper',$data);
		// //$this->load->view('welcome_message');

		$this->load->view('dasbor/home');
	}
	
}
