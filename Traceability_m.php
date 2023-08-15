<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traceability_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function countAll() {
        // Return total count of records
        return $this->db->count_all_results('TB_R_DISC_HUB_PAIRING');
    }

    public function getServerSideData($start, $length, $searchValue, $orderColumn, $orderDir) {
        $this->db->select('SEQ, VIN, QR_DISC, QR_HUB, RO_PAIRING, PAIRING_DT, JUDGEMENT, SHIFT, CREATED_DT, CREATED_BY');
        $this->db->from('TB_R_DISC_HUB_PAIRING');

        // Apply search filter
        if (!empty($searchValue)) {
            $this->db->like('SEQ', $searchValue);
            // Add more like statements for other columns if needed
        }

        // Apply ordering
        $this->db->order_by($orderColumn, $orderDir);

        // Apply pagination
        $this->db->limit($length, $start);

        $query = $this->db->get();
        return $query->result();
    }

}
