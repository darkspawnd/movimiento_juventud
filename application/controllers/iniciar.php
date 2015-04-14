<?php

class Iniciar extends CI_Controller {

	public function index()
	{
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('paginas/inicio');
		$this->load->view('comun/footer');	
	}

	public function menu()
	{
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('paginas/menutodos');
		$this->load->view('comun/footer');	
	}
    
    public function datos()
	{
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('paginas/razones');
		$this->load->view('comun/footer');	
	}

}
?>