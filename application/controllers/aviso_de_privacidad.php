<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Aviso_de_privacidad extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
			// $this->load->library('form_validation');
			// $this->load->library('email');
	   	}

	   	function index(){
	   		$this->load->view("aviso");
	   	}
	   	
	} //fin de la clase
?>