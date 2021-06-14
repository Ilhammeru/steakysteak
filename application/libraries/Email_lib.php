<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Email_lib {
	
	protected $CI;
	private $protocol = 'smtp';
	private $smtpCrypto = 'ssl';
	private $smtpHost = 'mail.nbobabar.com';
	private $smtpUser = 'info@nbobabar.com';
	private $smtpUserName = 'nbobabar';
	private $smtpPass = 'PastiAdaJalan';
	private $smtpPort = 465;
	private $mailtype = 'html';

	function __construct() {

		$this->CI =& get_instance();

		$this->CI->load->library('email');

	}
	// End of function __construct

	function send($emailName = '', $subject = '', $message = '') {

		$config = array(
					'protocol' => $this->protocol,
    				'smtp_crypto' => $this->smtpCrypto,
		    		'smtp_host' => $this->smtpHost,
					'smtp_user' => $this->smtpUser,
					'smtp_pass' => $this->smtpPass,
					'smtp_port' => $this->smtpPort,
					'mailtype' => $this->mailtype
				);

		$this->CI->email->initialize($config);
		 
		$this->CI->email->set_newline("\r\n");

		$this->CI->email->from($this->smtpUser, $this->smtpUserName);

		$this->CI->email->to($emailName);

		$this->CI->email->subject($subject);

		$this->CI->email->message($message);

		return $this->CI->email->send();

	}
	// End of functin send

}

/*
	End of class Email_lib
	End of file Email_lib.php
	Location: ./application/libraries/Email_lib.php
*/
