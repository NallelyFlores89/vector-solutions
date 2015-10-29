<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Entregas extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "entregas.png";
	   		$data['title'] = "Vector Solutions - Entregas";
	   		$data['color'] ="#F1592A";
	   		$data['page'] = $this->load->view("entregas", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>