<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Noticias extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "vector1.png";
	   		$data['title'] = "Vector Solutions - Noticias";
	   		$data['color'] ="#BDBDBD";
	   		$data['page'] = $this->load->view("noticias", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>