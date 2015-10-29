<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Quienes_somos extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "vector1.png";
	   		$data['title'] = "Vector Solutions - Quiénes somos";
	   		$data['color'] ="#000";
	   		$data['page'] = $this->load->view("quienes_somos", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>