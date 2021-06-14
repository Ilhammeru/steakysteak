<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

/*
 * Class Content
 */
class Content extends CI_Controller {

    private $contentImagePath = './images/content/';

	function __construct() {

		parent::__construct();

		// Check session
		$this->session_lib->check_session();
	}
	// End of function __construct

    public function index() {
        
        $query = $this->db->query("SELECT id, menu, content, is_active
                                        FROM content")->result();

        $attr = array(
                        'content' => $query
        );

        $this->layout_lib->default_template('webadmin/content/index', $attr);
    }
    // End of function index

    /**
     * @param post => id
     */
    public function get_content_by_id() {

        $id = $this->input->post('id');

        $query = $this->db->query("SELECT content
                                        FROM content WHERE id = " . $id)->row_array();

        $attr = array(
                        'id' => $id,
                        'content' => $query['content']
        );

        $this->load->view('webadmin/content/detail-content', $attr);
    }
    // End of function get_content_by_id

    /**
     * @param get => id
     */
	function image_upload($id) {

		$config['upload_path'] = $this->contentImagePath;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 0;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file')) {

			$this->output->set_header('HTTP/1.0 500 Server Error');
			exit;

		} else {

			$file = $this->upload->data();

			$this->output
				->set_content_type('application/json', 'utf-8')
				->set_status_header(200)
				->set_output(json_encode(['location' => base_url() . substr($this->contentImagePath, 2) . $file['file_name']]))
				->_display();
			exit;
		}
	}
	// End of function image_upload

    /**
     * @param post => id
     * @param post => post_contemt
     */
    public function save_content() {

        $id = $this->input->post('id');
        $content = $this->input->post('post_content');

        $data = array(
                        'content' => $content
        );

        $this->db->where('id', $id);
        $this->db->update('content', $data);

        redirect('content');
    }
    // End of function save_content

}
/* End of file Content.php */
/* Location: ./application/controllers/Content.php/ */