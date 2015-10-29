<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Lego extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "lego.png";
	   		$data['title'] = "Vector Solutions - Lego Serious Play";
	   		$data['color'] ="#68184B";
	   		$data['page'] = $this->load->view("lego", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>