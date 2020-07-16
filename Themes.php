<?php 

Class Themes {

	var $themes_app = array();

	function set($name, $value)
	{
		$this->themes_app[$name] = $value;
	}

	function load($themes = '', $view = '', $view_data = array(), $return = FALSE)
	{
		$this->CI =& get_instance();
		$this->set('content', $this->CI->load->view($view, $view_data, TRUE));
		return $this->CI->load->view($themes, $this->themes_app, $return);
	}
}