<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}



	public function index()
	{

	
		$data=array('title'=>'DataUser',
			'row' => $this->user_m->get(), 
		 'isi' =>'user/user_data'
		 );

		$this->load->view('layout/wrapper',$data);
	}


	public function add()

	{
		

		$this->form_validation->set_rules('fullname', 'Nama', 'required')
		;

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user. username]')
		;


		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]')
		;

		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
	)
		;



		$this->form_validation->set_rules('level', 'Level', 'required')
		;


		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi telebih dahulu');

		$this->form_validation->set_message('min_length', '%s minimal 5 karakter');

		$this->form_validation->set_message('is_unique', '%s ini sudah digunakan, silahkan pilih nama yang lain');

		$this->form_validation->set_error_delimiters('<span class="help-block">' , '</span>');


		if ($this->form_validation->run() == FALSE)

		{
			
			
			$data=array('title'=>'TambahUser',
			 'isi' =>'user/user_from_add'
		 );

		$this->load->view('layout/wrapper',$data);

		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if ($this->db->affected_rows() > 0) {

				echo '<script>
				alert("Data Berhasil Disimpan", "success");
				 </script>';

			}
			echo "<script>window.location = '".site_url('user')."';
				 </script>";
		}

	
	}


		public function del()
	{

		$id = $this->input->post('user_id');
		$this->user_m->del($id);

		if ($this->db->affected_rows() > 0) {

				echo '<script>
				alert("Data Berhasil Dihapus", "success");
				 </script>';

			}
			echo "<script>window.location = '".site_url('user')."';
				 </script>";
		}


		public function edit($id)

	{
		

		$this->form_validation->set_rules('fullname', 'Nama', 'required')
		;

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check')
		;

		if($this->input->post('password')) {

		$this->form_validation->set_rules('password', 'Password', 'min_length[5]')
		;

		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
	)
		;
	}



		if($this->input->post('passconf')) {

		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
	);
	}



		$this->form_validation->set_rules('level', 'Level', 'required')
		;


		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi telebih dahulu');

		$this->form_validation->set_message('min_length', '%s minimal 5 karakter');

		$this->form_validation->set_message('is_unique', '%s ini sudah digunakan, silahkan pilih nama yang lain');

		$this->form_validation->set_error_delimiters('<span class="help-block">' , '</span>');

		


		if ($this->form_validation->run() == FALSE)

		{
			$query = $this->user_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				
				$data=array('title'=>'EditUser',
		 		'isi' =>'user/user_form_edit'
		 );

		$this->load->view('layout/wrapper',$data);
		} else {

			echo "<script>alert('Data Tidak diTemukan');";
			echo "window.location = '".site_url('user')."';
				 </script>";
		}

		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->edit($post);
			if ($this->db->affected_rows() > 0) {

				echo '<script>
				alert("Data Berhasil Disimpan", "success");
				 </script>';

			}
			echo "<script>window.location = '".site_url('user')."';
				 </script>";
		}

	
	}

	function username_check()
	{

		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]' ");
		if($query->num_rows() > 0){

			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
			return FALSE;

		}else

		{
			return TRUE;

		}
	}

}


