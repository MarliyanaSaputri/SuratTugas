<?php

Class Fungsi {

	protected $ci;

	public function __construct() {
		$this->ci =& get_instance ();
	}

	function user_login () {
		$this->ci->load->model('user_m');
		$NIP = $this->ci->session->userdata('NIP');
		$user_data = $this->ci->user_m->get($NIP)->row();
		return $user_data;

	}
}
