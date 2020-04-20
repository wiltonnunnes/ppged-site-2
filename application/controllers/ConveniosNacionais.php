<?php
class ConveniosNacionais extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('convenios_nacionais/index');
		$this->load->view('templates/footer');
	}
}