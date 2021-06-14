<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

/*
 * Class Flavours
 */
class Flavours extends CI_Controller {

    private $imagesPath = './images/flavours';

	function __construct() {

		parent::__construct();

		// Check session
		$this->session_lib->check_session();
	}
	// End of function __construct

    public function index() {
        $this->layout_lib->default_template('webadmin/settings/flavours/index');
    }
    // End of function index

    public function get_data_flavours() {

        $query = $this->db->query("SELECT id, title, url, is_active
                                        FROM flavours")->result();

        //get the title
        foreach($query as $row) {

          $title[] = $row->title;

        }

        $data['title']  = $title;
        $data['result'] = $query;

        echo json_encode($data);
    }
    // End of function get_data_flavours

    /**
     * @param post => id
     * @param post => is_active
     */
    public function flavour_status() {

        $id = $this->input->post('id');
        $is_active = $this->input->post('is_active');

        $data = array(
                        'is_active' => $is_active
        );

        $this->db->where('id', $id);
        $this->db->update('flavours', $data);
    }
    // End of function flavour_status

    /**
     * @param post => id
     */
    public function delete_flavour() {

        $id = $this->input->post('id');

        $query = $this->db->query("SELECT url FROM flavours WHERE id = " . $id)->row_array();

        unlink('./' . $query['url']);

        $this->db->where('id', $id);
        $this->db->delete('flavours');
    }
    // End of function delete_flavour

    /**
     * @param post => title
     * @param post => file
     */
    public function save_data() {

        $title = $this->input->post('title');
        $file = $this->input->post('file');

        $fileName = 'flavour-' . strtotime(date('Y-m-d H:i:s'));

		    $config['upload_path']      = $this->imagesPath;
        $config['allowed_types']    = 'png|jpeg|jpg';
        $config['file_name']        = $fileName;
        $config['overwrite']        = TRUE;

        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if ($title == '') {

          $data['message'] = 'title empty';

        } else if ( ! $this->upload->do_upload('file')) {

            $error = $this->upload->display_errors('', '');
            $data['message'] = $error;

		    } else {

            $file = $this->upload->data();

            $dataInsert = array(
							'url' => substr($this->imagesPath, 2) . '/' . $fileName . $this->upload->data('file_ext'),
							'title' => $title,
							'is_active' => 1
            );

            $data['message'] = 'success';

			       $this->db->insert('flavours', $dataInsert);

          }

        echo json_encode($data);

    }
    // End of function save_data

    public function edit_image() {

      $fileName = 'flavour----' . strtotime(date('Y-m-d H:i:s'));
      $id = $this->input->post('id-db');

      $config['upload_path']      = $this->imagesPath;
      $config['allowed_types']    = 'png|jpeg|jpg';
      $config['file_name']        = $fileName;
      $config['overwrite']        = TRUE;

      $this->load->library('upload',$config);
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('file')) {

        $error = $this->upload->display_errors('', '');

        if ($error == "The filetype you are attempting to upload is not allowed.") {

          $newError = 'error-wrong';

        }

        $data['message'] = $newError;

      } else {

        $file = $this->upload->data();

        $dataInsert = array(
          'url' => substr($this->imagesPath, 2) . '/' . $fileName . $this->upload->data('file_ext')
        );

        $this->db->where('id', $id);
        $this->db->update('flavours', $dataInsert);

        //get image url
        $query = $this->db->query("SELECT url
                                      FROM flavours
                                      WHERE id = $id")->row_array();
        $url = $query['url'];

        $data['message'] = 'success';
        $data['url'] = $url;

      }

      echo json_encode($data);

    }
    // End of function edit_image


}
/* End of file Flavours.php */
/* Location: ./application/controllers/Flavours.php/ */
