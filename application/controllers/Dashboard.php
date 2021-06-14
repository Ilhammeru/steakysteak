<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

/*
 * Class Dashboard
 */
class Dashboard extends CI_Controller {

	function __construct() {

		parent::__construct();

		// Check session
		$this->session_lib->check_session();
	}
	// End of function __construct

	public function index() {

		$this->layout_lib->default_template('webadmin/layouts/dashboard');
		
	}
	// End of function index

	public function load_modal_sign_out() {

		$this->load->view('webadmin/layouts/modal-sign-out');
		
	}
	// End of function load_modal_sign_out

	public function destroy_sessions() {

		// Destroy session
		$this->session->sess_destroy();

		redirect('sessions/signin?logout=1');
		
	}
	// End of function destroy_sessions
}
/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php/ */
