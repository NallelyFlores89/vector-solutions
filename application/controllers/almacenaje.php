<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Almacenaje extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "Almacenaje.png";
	   		$data['title'] = "Vector Solutions - Almacenaje";
	   		$data['color'] ="#0B656A";
	   		$data['page'] = $this->load->view("almacenaje", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>