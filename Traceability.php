<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Traceability extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Traceability_m');
		//$this->my_login->check_login();
	}

	public function index()
	{
		// $trace = $this->Traceability_m->get();
		$data = array('title' 	=> 'Traceability',
					  // 'trace'   => $trace,
					  'content' => 'traceability'
		       );
		$this->load->view('layouts/wrapper', $data, FALSE);
	}

	public function serverSideData() {
        // Load the model and any other necessary libraries/helpers
        $this->load->model('Traceability_m');

        // Define the columns you want to select
        $columns = ['SEQ', 'VIN', 'QR_DISC', 'QR_HUB', 'RO_PAIRING', 'PAIRING_DT', 'JUDGEMENT', 'SHIFT', 'CREATED_DT', 'CREATED_BY'];

        // Get the total count of records
        $totalRecords = $this->Traceability_m->countAll();

        // Server-side parameters from DataTables
        $start = $this->input->get('start');
        $length = $this->input->get('length');
        $searchValue = $this->input->get('search')['value'];
        $orderColumn = $columns[$this->input->get('order')[0]['column']];
        $orderDir = $this->input->get('order')[0]['dir'];

        // Fetch data using model
        $data = $this->Traceability_m->getServerSideData($start, $length, $searchValue, $orderColumn, $orderDir);

        // Prepare response
        $response = [
            'draw' => intval($this->input->get('draw')),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords, // For simplicity, you might need to adjust this based on actual filtered count
            'data' => $data,
        ];

        // Send JSON response
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}

/* End of file Traceability.php */
/* Location: ./application/controllers/Traceability.php */