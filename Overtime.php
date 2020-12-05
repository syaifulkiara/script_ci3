<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overtime extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();
         $this->load->helper('tanggal');
         $this->load->model('ovt_m');
    }

	public function index()
	{
		$data['title'] = 'Data Overtimes';

		$usr = $this->session->userdata('email');
		$data['overtime'] = $this->db->query(
			"SELECT * FROM overtime ot,user usr 
			 WHERE ot.id_user = usr.id_user 
			 AND usr.email ='$usr' ")->result_array();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->themes->load('themes','overtime/index', $data);
	}

	public function add()
	{

	    $this->load->library('form_validation');

	    $data['title'] = 'Add Data';
	    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	    $this->form_validation->set_rules('day_date', 'Day Date', 'required');
	    $this->form_validation->set_rules('start', 'Start', 'required');
	    $this->form_validation->set_rules('finish', 'Finish', 'required');
	    $this->form_validation->set_rules('activity', 'Activity', 'required');
	    $this->form_validation->set_rules('location', 'Location', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->themes->load('themes','overtime/add', $data);

	    }
	    else
	    {
	    	$data = array(
	    	'id_user'	 => $this->input->post('id_user'),
	        'day_date'	 => $this->input->post('day_date'),
	        'start' 	 => $this->input->post('start'),
	        'finish'	 => $this->input->post('finish'),
	        'activity' 	 => $this->input->post('activity'),
	        'location' 	 => $this->input->post('location')
		    );

	        $this->db->insert('overtime', $data);
	        $this->session->set_flashdata('success', 'Record add successfully');
	        redirect('overtime');
	    }		
	}

	public function edit($id)
	{
	    $data['title'] = 'Edit Data';
	    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	    $data['overtime'] = $this->ovt_m->getOvtById($id);
	    $this->themes->load('themes','overtime/edit', $data);   		
	}

	public function update(){
		$result = $this->ovt_m->update();
		if($result){
			$this->session->set_flashdata('success', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error', 'Faill to update record');
		}
		redirect(base_url('overtime'));
	}

	public function del($id)
	{
		$this->ovt_m->del($id);
		if($this->db->affected_rows() > 0){
		$this->session->set_flashdata('success', 'Record delete successfully');
		}
		redirect('overtime');
	}

}

/* End of file Overtime.php */
/* Location: ./application/controllers/Overtime.php */