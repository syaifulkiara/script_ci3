<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();
        check_admin();
    }

	public function index()
	{
		$data['title'] = 'Administrator';
		$data['row'] = $this->db->get('user')->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->themes->load('themes','admin/index', $data);
	}

	public function all()
	{
		$data['title'] = 'All Data Overtime';
		
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['overtime'] = $this->db->query("SELECT * FROM overtime ot,user usr 
			 WHERE ot.id_user = usr.id_user ORDER BY day_date DESC")->result_array();
		$this->themes->load('themes','admin/all_data', $data);
	}

}

/* End of file Administrator.php */
/* Location: ./application/controllers/Administrator.php */