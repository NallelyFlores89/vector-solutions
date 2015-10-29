<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Servicios_especiales extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "servicios.png";
	   		$data['title'] = "Vector Solutions - Servicios Especiales";
	   		$data['color'] ="#102D44";
	   		$data['page'] = $this->load->view("servicios_especiales", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>