<?php 

	Class Counter {
		protected $CI;
		public function __construct(){
		$this->CI =& get_instance();
	}

	function user_login(){
		$this->CI->load->model('user_m');
		$user_id 	= $this->CI->session->userdata('email');
		$user_data 	= $this->CI->user_m->get($user_id)->row();
		return $user_data;
	}

	function PdfGenerator($html, $filename, $paper, $orientation){
		$dompdf = new Dompdf\Dompdf();
		$dompdf->loadHtml($html);
		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper($paper, $orientation);
		// Render the HTML as PDF
		$dompdf->render();
		// Output the generated PDF to Browser
		$dompdf->stream($filename, array('Attachment' => 0));
	}

	public function count_user(){
		$this->CI->load->model('user_m');
		return $this->CI->user_m->get()->num_rows();
	}

	public function count_overtime(){
		$this->CI->load->model('ovt_m');
		return $this->CI->ovt_m->get()->num_rows();
	}
}