<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Distribucion extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "distribucion.png";
	   		$data['title'] = "Vector Solutions - Distribución";
	   		$data['color'] ="#9F1C30";
	   		$data['page'] = $this->load->view("distribucion", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>