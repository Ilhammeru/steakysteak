<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

/*
 * Class Layout_lib
 */
class Layout_lib {

	protected $CI;
	
	function __construct() {

		$this->CI =& get_instance();

	}
	// End of function __construct

	public function default_template($view, $data = '') {

		$this->CI->load->view('webadmin/layouts/header');
		$this->CI->load->view('webadmin/layouts/navbar');
		$this->CI->load->view($view, $data);
		$this->CI->load->view('webadmin/layouts/footer');
		
	}
	// End of function default_template
	
    public function load_view($view, $data = array()) {
        $this->CI->load->view($view, $data);
    }
    // End of function load_view

	public function view_steaky($view, $data = '') {
		$this->CI->load->view('layout-steaky/header', $data);
		$this->CI->load->view($view, $data);
		$this->CI->load->view('layout-steaky/footer');
	}

}
/* End of file Layout_lib.php */
/* Location: ./application/controllers/Layout_lib.php/ */