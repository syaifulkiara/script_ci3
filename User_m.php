<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('user');
		if($id != null){
			$this->db->where('email', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function getUserById($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])->row_array(); 
    }

}
