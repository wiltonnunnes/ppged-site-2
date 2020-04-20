<?php
class Intercambios extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header');
		if ($this->is_logged_in())
			$this->load->view('templates/menuAdm');
		else
			$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('intercambios/index');
		$this->load->view('templates/footer');
	}
}