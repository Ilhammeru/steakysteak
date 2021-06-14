<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

/*
 * Class Banner
 */
class Banner extends CI_Controller
{

    private $imagesPath = './images/banners';

    function __construct()
    {

        parent::__construct();

        // Check session
        $this->session_lib->check_session();
    }
    // End of function __construct

    /* ========================================================= Carousel Banner ========================================================= */

    public function carousel_banner()
    {
        $this->layout_lib->default_template('webadmin/settings/banners/carousel-banner/index.php');
    }
    // End of function carousel_banner

    public function get_data_carousel()
    {

        $query = $this->db->query("SELECT id, menu, is_active FROM carousel_banner")->result();

        $attr = array(
            'carousel' => $query
        );

        $this->load->view('webadmin/settings/banners/carousel-banner/get-data-carousel', $attr);
    }
    // End of function get_data_carousel

    /**
     * @param post => menu
     */
    public function add_carousel()
    {

        $this->db->trans_start();

        $menu = $this->input->post('menu');

        $query = $this->db->query("SELECT id FROM carousel_banner WHERE menu = '" . $menu . "'");

        if ($query->num_rows() > 0) {

            echo 'duplicate';
        } else {

            $data = array(
                'menu' => $menu,
                'is_active' => 1
            );

            $this->db->insert('carousel_banner', $data);
        }

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            echo 'error';
        } else {
            $this->db->trans_commit();
            echo 'success';
        }
    }
    // End of function add_carousel

    /**
     * @param post => id
     */
    public function get_detail_carousel()
    {

        $id = $this->input->post('id');

        $query = $this->db->query("SELECT id, menu, detail_m, detail_w, is_active FROM carousel_banner WHERE id = " . $id)->row_array();

        $attr = array(
            'carousel' => $query
        );

        $this->load->view('webadmin/settings/banners/carousel-banner/get-detail-carousel', $attr);
    }
    // End of function get_detail_carousel

    /**
     * @param post => menu
     * @param post => id
     */
    public function update_carousel_menu()
    {

        $id = $this->input->post('id');
        $menu = $this->input->post('menu');

        $query = $this->db->query("SELECT id FROM carousel_banner WHERE menu = '" . $menu . "' AND id != " . $id);

        if ($query->num_rows() > 0) {
            echo 'duplicate';
        } else {

            $data = array(
                'menu' => $menu
            );

            $this->db->where('id', $id);
            $this->db->update('carousel_banner', $data);

            echo 'success';
        }
    }
    // End of function update_carousel_menu

    /**
     * @param post => is_active
     * @param post => id
     */
    public function update_carousel_is_active()
    {

        $id = $this->input->post('id');
        $is_active = $this->input->post('is_active');

        $data = array(
            'is_active' => $is_active
        );

        $this->db->where('id', $id);
        $this->db->update('carousel_banner', $data);
    }
    // End of function update_carousel_is_active

    /**
     * @param post => id
     */
    public function delete_carousel()
    {

        $id = $this->input->post('id');

        $query = $this->db->query("SELECT detail_m, detail_w
                                        FROM carousel_banner
                                        WHERE id = " . $id)->row_array();

        $detail_m = json_decode($query['detail_m'], TRUE);
        $detail_w = json_decode($query['detail_w'], TRUE);

        foreach ($detail_m as $row) {
            unlink('./' . $row['url']);
        }

        foreach ($detail_w as $row) {
            unlink('./' . $row['url']);
        }

        $this->db->where('id', $id);
        $this->db->delete('carousel_banner');
    }
    // End of function delete_carousel

    /**
     * @param post => id
     * @param post => view
     */
    public function upload_file_carousel()
    {

        $id     = $this->input->post('id');
        $view   = $this->input->post('view');

        $param_detail = 'detail_' . $view;

        $query = $this->db->query("SELECT detail_m, detail_w
                                        FROM carousel_banner
                                        WHERE id = " . $id)->row_array();

        $detail = json_decode($query[$param_detail], TRUE);

        $fileName = 'carousel-banner-' . $id . '-' . $view . '-' . strtotime(date('Y-m-d H:i:s'));

        $config['upload_path']      = $this->imagesPath;
        $config['allowed_types']    = '*';
        $config['file_name']        = $fileName;
        $config['overwrite']        = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            $error = $this->upload->display_errors('', '');

            if ($error == 'The filetype you are attempting to upload is not allowed.') {

                echo 'error-wrong';
            } else {

                echo 'error';
            }
        } else {

            $file = $this->upload->data();

            $format[] = array(
                'url' => substr($this->imagesPath, 2) . '/' . $fileName . $this->upload->data('file_ext'),
                'is_active' => 1
            );

            $data = array(
                $param_detail => json_encode($format)
            );

            $this->db->where('id', $id);
            $this->db->update('carousel_banner', $data);

            echo 'success';
        }
    }
    // End of function upload_file_carousel

    /**
     * @param post => id
     * @param post => view
     */
    public function get_images_carousel()
    {

        $id = $this->input->post('id');
        $view = $this->input->post('view');

        $param_detail = 'detail_' . $view;

        $query = $this->db->query("SELECT id, detail_m, detail_w, is_active
                                        FROM carousel_banner
                                        WHERE id = " . $id)->row_array();

        $detail = json_decode($query[$param_detail], TRUE);

        echo json_encode($detail);
    }
    // End of function get_images_carousel

    /**
     * @param post => id
     * @param post => no_arr
     * @param post => is_active
     * @param post => view
     */
    public function disabled_image_carousel()
    {

        $id = $this->input->post('id');
        $no_arr = $this->input->post('no_arr');
        $is_active = $this->input->post('is_active');
        $view = $this->input->post('view');

        $param_detail = 'detail_' . $view;

        $query = $this->db->query("SELECT detail_m, detail_w
                                        FROM carousel_banner
                                        WHERE id = " . $id)->row_array();

        $detail = json_decode($query[$param_detail], TRUE);

        $detail[$no_arr]['is_active'] = $is_active;

        $data = array(
            $param_detail => json_encode($detail)
        );

        $this->db->where('id', $id);
        $this->db->update('carousel_banner', $data);
    }
    // End of function disabled_image_carousel

    /**
     * @param post => id
     * @param post => no_arr
     * @param post => view
     */
    public function delete_image_carousel()
    {

        $id = $this->input->post('id');
        $no_arr = $this->input->post('no_arr');

        $view = $this->input->post('view');

        $param_detail = 'detail_' . $view;

        $query = $this->db->query("SELECT id, detail_m, detail_w, is_active
                                        FROM carousel_banner
                                        WHERE id = " . $id)->row_array();

        $detail = json_decode($query[$param_detail], TRUE);

        unlink('./' . $detail[$no_arr]['url']);

        unset($detail[$no_arr]);

        $newDetail = array_values($detail);

        $data = array(
            $param_detail => json_encode($newDetail)
        );

        $this->db->where('id', $id);
        $this->db->update('carousel_banner', $data);
    }
    // End of function delete_image_carousel

    public function convert() {
        $id = $this->input->post('id');

        $view = $this->input->post('view');

        $param_detail = 'detail_' . $view;

        $query = $this->db->query("SELECT id, detail_m, detail_w, is_active
                                        FROM carousel_banner
                                        WHERE id = " . $id)->row_array();

        $detail = json_decode($query[$param_detail], TRUE);

        $img = $detail[0]['url'];

        //convert 
        $image = imagecreatefrompng($img);

        imagewebp($image, $img . '.webp', 100);

        print_r($image);
    }

}
/* End of file Banner.php */
/* Location: ./application/controllers/Banner.php/ */