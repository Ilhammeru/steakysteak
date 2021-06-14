<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

/**
 * Copyright (c) 2021 Sosial Lab
 * @author Rivan
 * @version v1.04.11
 * @modify Ilham
 * @updated 11 April 2021
 */

/*
 * Class Outlets
 *
 * Note: type 0 for opening soon; type 1 for is open;
 */
class Outlets extends CI_Controller
{


	private $imagesPath = './images/outlets';

	function __construct()
	{

		parent::__construct();

		// Check session
		$this->session_lib->check_session();
	}
	// End of function __construct

	public function index()
	{
		$this->layout_lib->default_template('webadmin/settings/outlets/index');
	}
	// End of function index

	public function get_data_outlets()
	{

		$query = $this->db->query("SELECT id, outlet_name, address, ig, url, IF(type = 1, 'Is open', 'Opening soon') AS 'type', is_active
										FROM outlets")->result();

		echo json_encode($query);
	}
	// End of function get_data_outlets

	/**
	 * @param post => outlet_name
	 * @param post => address
	 * @param post => ig
	 * @param post => type
	 * @param post => file
	 */
	public function save_data()
	{

		$outlet_name 	= $this->input->post('outlet_name');
		$address 		= $this->input->post('address');
		$ig 			= $this->input->post('ig');
		$type			= $this->input->post('type');
		$geo 			= $this->input->post('geo');

		$fileName = 'outlet-' . strtotime(date('Y-m-d H:i:s'));

		$config['upload_path']      = $this->imagesPath;
		$config['allowed_types']    = 'png|jpeg|jpg';
		$config['file_name']        = $fileName;
		$config['overwrite']        = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('file')) {

			echo $this->upload->display_errors('', '');
		} else {

			$file = $this->upload->data();

			$data = array(
				'url' => substr($this->imagesPath, 2) . '/' . $fileName . $this->upload->data('file_ext'),
				'outlet_name' => $outlet_name,
				'address' => $address,
				'geolocation'	=> $geo,
				'ig' => $ig,
				'type' => $type,
				'is_active' => 1
			);

			$this->db->insert('outlets', $data);

			echo 'success';
		}
	}
	// End of function save_data

	/**
	 * @param post => outlet_name
	 * @param post => address
	 * @param post => ig
	 * @param post => type
	 * @param post => file
	 * @param post => id
	 */
	public function save_edit()
	{

		$outlet_name 	= $this->input->post('outlet_name');
		$address 		= $this->input->post('address');
		$geo 			= $this->input->post('geo');
		$ig 			= $this->input->post('ig');
		$type			= $this->input->post('type');
		$id 			= $this->input->post('id-outlets');
		$img_outlet 	= $_FILES['img-edit']['name'];

		$fileName = 'outlet-' . strtotime(date('Y-m-d H:i:s'));

		$config['upload_path']      = $this->imagesPath;
		$config['allowed_types']    = 'png|jpeg|jpg';
		$config['file_name']        = $fileName;
		$config['overwrite']        = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($img_outlet == '') {

			$data = array(
				'outlet_name' => $outlet_name,
				'address' => $address,
				'geolocation'	=> $geo,
				'ig' => $ig,
				'type' => $type,
				'is_active' => 1
			);

			$this->db->where('id', $id);
			$this->db->update('outlets', $data);
			$message = 'success';
			echo json_encode($message);
		} else {

			if (!$this->upload->do_upload('img-edit')) {

				$error = $this->upload->display_errors('', '');
				if ($error == 'The filetype you are attempting to upload is not allowed.') {

					$message = 'error-wrong';
				} else {

					$message = 'error';
				}

				echo json_encode($message);
			} else {

				$file = $this->upload->data('file_ext');

				$data = array(
					'url' => substr($this->imagesPath, 2) . '/' . $fileName . $file,
					'outlet_name' => $outlet_name,
					'address' => $address,
					'geolocation'	=> $geo,
					'ig' => $ig,
					'type' => $type,
					'is_active' => 1
				);

				$this->db->where('id', $id);
				$this->db->update('outlets', $data);
				$message = 'success';
				echo json_encode($message);
			}
		}
	}
	// end of funtion save_edit

	/**
	 * @param post => id
	 * @param post => is_active
	 */
	public function outlet_status()
	{

		$id = $this->input->post('id');
		$is_active = $this->input->post('is_active');

		$data = array(
			'is_active' => $is_active
		);

		$this->db->where('id', $id);
		$this->db->update('outlets', $data);
	}
	// End of function outlet_status

	/**
	 * @param post => id
	 */
	public function delete_outlet()
	{

		$id = $this->input->post('id');

		$query = $this->db->query("SELECT url
										FROM outlets
										WHERE id = " . $id)->row_array();

		unlink('./' . $query['url']);

		$this->db->where('id', $id);
		$this->db->delete('outlets');
	}
	// End of function delete_outlet

	/**
	 * @param post => id
	 * @return json
	 */
	public function edit_outlets()
	{

		$id = $this->input->post('id');

		$query = $this->db->query("SELECT outlet_name, address, ig, url, type, is_active, geolocation
																		FROM outlets
																		WHERE id = $id")->row_array();

		echo json_encode($query);
	}
}
/* End of file Outlets.php */
/* Location: ./application/controllers/Outlets.php/ */
