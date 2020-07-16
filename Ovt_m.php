<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ovt_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('overtime');
		$query = $this->db->get();
		return $query;
	}

	public function getOvtById($id)
	{
		$this->db->where('id_overtime', $id);
		$query = $this->db->get('overtime');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	
	}

	public function update(){
		$id = $this->input->post('id_overtime');
		$data = array(
	    	// 'id_user'	 => $this->input->post('id_user'),
	        'day_date'	 => $this->input->post('day_date'),
	        'start' 	 => $this->input->post('start'),
	        'finish'	 => $this->input->post('finish'),
	        'activity' 	 => $this->input->post('activity'),
	        'location' 	 => $this->input->post('location')
		    );
		$this->db->where('id_overtime', $id);
		$this->db->update('overtime', $data);
	
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function del($id)
	{
	    $this->db->where('id_overtime', $id);
		$this->db->delete('overtime');
	}

}

/* End of file Ovt_m.php */
/* Location: ./application/models/Ovt_m.php */