<?php defined('BASEPATH') or exit('No direct script allowed');

/** 
* @author Ilham
* @version v2.04.23
* @modify Ilham
* @updated 
*/

class Steaky extends CI_Controller {

    // Akademi Kopi
    private $franchiseId = 49;

    public function __construct() {
        parent::__construct();
        $this->load->model('Multiple_db_model', 'database');
    }

    public function index() {
        $attr['title'] = 'Steaky Steak';

        $this->layout_lib->view_steaky('steaky/landing_page', $attr);
    }
    // end of function index

    public function get_store() {
        $query = $this->db->query("SELECT outlet_name, address, geolocation, ig, url
                                FROM outlets
                                WHERE is_active = 1");

        if ($query->num_rows() > 0) {
            echo json_encode($query->result());
        } else {
            $message = 'empty';
            echo json_encode($message);
        }
    }

    public function get_data()
    {

        $query = "SELECT franchise_name, 
									description,
									videos,
									chat_script_web, 
									color
									FROM franchise
									WHERE id = " . $this->franchiseId;        
        $result = $this->database->custom_query($query, 'df')->row_array();

        $queryPhone = "SELECT title, phone
										FROM franchise
										JOIN franchise_phone ON franchise_phone.franchise_id = franchise.id
										WHERE franchise.id = " . $this->franchiseId;

        $resultPhone = $this->database->custom_query($queryPhone, 'df')->result();

        $chatContent = $result['chat_script_web'];
        $franchiseName = $result['franchise_name'];

        $messageContent = str_replace('[franchise]', $franchiseName, $chatContent);
        $messageContent = str_replace(' ', '+', $messageContent);
        $messageContent = str_replace('&', '%26', $messageContent);
        $messageContent = str_replace(',', '%2C', $messageContent);
        $messageContent = str_replace('<br />', '%0A', nl2br($messageContent));
        $messageContent = str_replace(':', '%3A', $messageContent);

        $data = array(
            'franchise_name'     => $result['franchise_name'],
            'phone'             => $resultPhone,
            'message_content'     => $messageContent,
            'color'             => $result['color']
        );

        echo json_encode($data);
    }
    // End of function get_data

    public function get_content()
    {

        $query = $this->db->query("SELECT description, videos
								FROM franchise
								WHERE id = " . $this->franchiseId)->row_array();

        $videos = $query['videos'];

        $description = str_replace('</p>', '', str_replace('<p>', '', $query['description']));
        $description = str_replace('<br />', '', $description);

        if ($videos != '' || !empty($videos)) {
            $videos = json_decode($videos, TRUE);

            for ($i = 0; $i < count($videos); $i++) {

                $key = $this->get_string_between($description, '[VIDEO]', '[/VIDEO]');
                $url_image = $this->get_string_between($key, 'src="', '"');

                $description = str_replace($key, $this->replaced($url_image, $videos[$i]), $description);
                $description = str_replace('[VIDEO]<table', '<table', $description);
                $description = str_replace('</table>[/VIDEO]', '</table>', $description);
            }
        }

        $description = str_replace('img src', 'img class="lazyload" data-src', $description);

        echo $description;
    }
    // End of function get_content

    function get_string_between($string, $start, $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
    // End of function get_string_between

    function replaced($img, $video)
    {
        $html = '<table class="video-content"><tbody><tr><td background="' . $img . '" style="background-size:100%; text-align:center">';
        $html .= '<video class="responsive-video" controls controlsList="nodownload"><source src="' . $this->videosPath . $video . '" type="video/webm"></video>';
        $html .= '</td></tr></tbody></table>';
        return $html;
    }
	// End of function replaced
}
