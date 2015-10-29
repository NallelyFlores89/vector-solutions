<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Valor_agregado extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data['logo'] = "valor.png";
	   		$data['title'] = "Vector Solutions - Valor agregado";
	   		$data['color'] ="#E4A025";
	   		$data['page'] = $this->load->view("valor", null, true);
	   		$this->load->view("layaouts/template",$data);
	   	}
	   	
	} //fin de la clase
?>