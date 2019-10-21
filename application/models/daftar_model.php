<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Daftar_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	//mengambil data lha//

	  public function daftar_view($tabel) 
	 {
		 
		  $query = $this->db->get($tabel);
        return $query->result_array();
		 
	 }
	 public function insert_data($data,$table)
	{
	$this->db->insert($table,$data);
    }
    function cari_data($tabel,$where)
	{
		$query = $this->db->get_where($tabel,$where) ;
		return $query->result_array();
    }
	public function get_jb(){
		
			$query = $this->db->query("SELECT * from tb_pegawai WHERE jabatan = 'Kepala Bidang Aplikasi Informatika'");
			return $query->result_array();
		}

		
		public function get_j($nip){
		
			$query = $this->db->query("SELECT * FROM 'spt'.'tb_pegawai' WHERE 'NIP' = $nip ");
			return $query->result_array();
		}

  	public function get_all($tabel,$tabeljoin,$wherejoin){
		
			$query = $this->db->query("select * from $tabel jm JOIN $tabeljoin m ON m.$wherejoin = jm.$wherejoin");
			return $query->result_array();
		}

	public function get_cariall($tabel,$tabeljoin,$wherejoin,$where){
			$query = $this->db->get_where("$tabel jm JOIN $tabeljoin m ON m.$wherejoin = jm.$wherejoin where id_st = '$where'");
			return $query->result_array();
		}

	public function get_caridata($tabel,$tabeljoin,$wherejoin,$where){
			$query = $this->db->get_where("$tabel jm JOIN $tabeljoin m ON m.$wherejoin = jm.$wherejoin where id_dl = '$where'");
			return $query->result_array();
		}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
    }  
	 
	public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
    }   

}