<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Servicios extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$this->load->view("servicios");
	   	}

	   	
	} //fin de la clase
?>