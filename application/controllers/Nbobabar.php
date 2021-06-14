<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

/*
 * Class Nbobabar
 */
class Nbobabar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->library('user_agent');
    }
    // End of function __construct

    public function index()
    {

        // Captcha configuration
        $config = array(
            'img_path'      => './assets/captcha_images/',
            'img_url'       => './assets/captcha_images/',
            'font_path'     => './system/fonts/texb.ttf',
            'img_width'     => 170,
            'img_height'    => 55,
            'expiration'    => 7200,
            'word_length'   => 6,
            'font_size'     => 25,
            'colors'        => array(
                'background' => array(171, 194, 177),
                'border' => array(10, 51, 11),
                'text' => array(0, 0, 0),
                'grid' => array(185, 234, 237)
            )
        );

        $captcha = create_captcha($config);

        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);

        // Pass captcha image to view
        $attr['captchaImg'] = $captcha['image'];

        //     $this->load->view('layout-desktop/header');
        // $this->load->view('layout-desktop/navbar');
        // $this->load->view('layout-desktop/content', $attr);
        // $this->load->view('layout-desktop/footer');

        if ($this->agent->is_mobile()) {
            $this->load->view('layout-mobile/header');
            $this->load->view('layout-mobile/navbar');
            $this->load->view('layout-mobile/content', $attr);
            $this->load->view('layout-mobile/footer');
        } elseif ($this->agent->is_browser()) {
            $this->load->view('layout-desktop/header');
            $this->load->view('layout-desktop/navbar');
            $this->load->view('layout-desktop/content', $attr);
            $this->load->view('layout-desktop/footer');
        }
    }
    // End of function index

    public function captcha_refresh()
    {

        // Captcha configuration
        $config = array(
            'img_path'      => './assets/captcha_images/',
            'img_url'       => './assets/captcha_images/',
            'font_path'     => './system/fonts/texb.ttf',
            'img_width'     => 200,
            'img_height'    => 55,
            'expiration'    => 7200,
            'word_length'   => 6,
            'font_size'     => 25,
            'colors'        => array(
                'background' => array(171, 194, 177),
                'border' => array(10, 51, 115),
                'text' => array(0, 0, 0),
                'grid' => array(185, 234, 237)
            )
        );

        $captcha = create_captcha($config);

        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);

        // Display captcha image
        echo $captcha['image'];
    }

    public function load_flavours()
    {

        $query = $this->db->query("SELECT id, title, url, top_banner
                                        FROM flavours
                                        WHERE is_active = 1")->result();

        $attr = array(
            'flavours' => $query
        );

        echo json_encode($attr);
    }
    // End of function load_flavours

    /**
     * @param post => type
     */
    public function load_outlets()
    {

        $type = $this->input->post('type');

        $query = $this->db->query("SELECT id, outlet_name, url, ig, address
                                        FROM outlets
                                        WHERE is_active = 1
                                        AND type = " . $type)->result();

        $attr = array(
            'outlets' => $query
        );

        echo json_encode($attr);
    }
    // End of function load_outlets

    /**
     * @param post => param
     */
    public function load_banner_m()
    {

        $param = $this->input->post('param');

        $query = $this->db->query("SELECT detail_m
                                        FROM carousel_banner
                                        WHERE is_active = 1
                                        AND menu = '" . $param . "'")->row_array();

        $data = json_decode($query['detail_m'], TRUE);

        echo json_encode($data);
    }
    // End of function load_banner_m

    /**
     * @param post => param
     */
    public function load_banner_w()
    {

        $param = $this->input->post('param');

        $query = $this->db->query("SELECT detail_w
                                        FROM carousel_banner
                                        WHERE is_active = 1
                                        AND menu = '$param'")->row_array();

        $data = json_decode($query['detail_w'], TRUE);

        echo json_encode($data);
    }
    // End of function load_banner_w

    /**
     * @param post => param
     */
    public function load_content()
    {

        $param = $this->input->post('param');

        $query = $this->db->query("SELECT content
                                        FROM content
                                        WHERE is_active = 1
                                        AND menu = '" . $param . "'")->row_array();

        $data = $query['content'];

        echo json_encode($data);
    }
    // End of function load_content

    /**
     * @param post => nama
     * @param post => email
     * @param post => umur
     * @param post => keterangan
     * @param post => captcha
     */
    public function save_visitor()
    {

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $umur = $this->input->post('umur');
        $keterangan = $this->input->post('keterangan');
        $captcha = $this->input->post('captcha');

        if ($captcha != $this->session->userdata('captchaCode')) {
            echo 'captcha-not-match';
        }

        $data = array(
            'nama'      => $nama,
            'email'     => $email,
            'umur'      => $umur,
            'keterangan' => $keterangan,
            'time'      => date('Y-m-d H:i:s')
        );

        $this->db->insert('visitor', $data);

        // Sending Email
        $this->load->library('email_lib');

        // Email name, subject, message
        // $this->email_lib->send();

        echo 'success';
    }
    // End of function save_visitor

}
/* End of file Nbobabar.php */
/* Location: ./application/controllers/Nbobabar.php/ */