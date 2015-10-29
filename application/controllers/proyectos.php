<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Proyectos extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "proyectos.png";
	   		$data['title'] = "Vector Solutions - Proyectos";
	   		$data['color'] ="#C49A6C";
	   		$data['page'] = $this->load->view("proyectos", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>