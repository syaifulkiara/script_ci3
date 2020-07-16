<?php 

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }

    function check_admin(){
	$CI =& get_instance();
	$CI->load->library('counter');
	if($CI->counter->user_login()->role_id != 1){
		redirect('dashboard');
	}
  }
}
