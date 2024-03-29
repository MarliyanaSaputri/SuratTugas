<?php defined('BASEPATH')  OR exit ('No direct script access allowed');

class User_m extends CI_Model
{
	

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('tb_pegawai');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function get ($id = null)
	{
		$this->db->from('tb_pegawai');
		if($id != null)
			$this->db->where('NIP', $id);
 	{
 		 $query = $this->db->get();
 		 return $query;

 		}	

 	}

 	public function add($post) 
 	{
 		$params['nama'] = $post['fullname'] ;
 		$params['username'] = $post['username'];
 		$params['password'] = sha1($post['username']);
		$params['level'] = $post['level'];
		$this->db->insert('tb_pegawai', $params);
 	}



		public function del($id)
	{

		$this->db->where('NIP', $id);
		$this->db->Delete('tb_pegawai');
	}


	public function edit($post) 
 	{
 		$params['nama'] = $post['nama'] ;
 		$params['username'] = $post['username'];
 		if(!empty($post['password'])) {
 			$params['password'] = sha1($post['password']);
 		}
 		$params['password'] = sha1($post['password']);
		$params['level'] = $post['level'];
		$this->db->where('NIP', $post['NIP']);
		$this->db->update('tb_pegawai', $params);
 	}


	
	}
