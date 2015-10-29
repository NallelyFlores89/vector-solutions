<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Infraestructura extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "infra.png";
	   		$data['title'] = "Vector Solutions - Infraestructura";
	   		$data['color'] ="#404041";
	   		$data['page'] = $this->load->view("infra", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>