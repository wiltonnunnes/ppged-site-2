<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array('noticias_anpae_model', 'informativos_model'));
	}

	public function index() {
    $data['noticias_outras'] = $this->noticias_anpae_model->get("categoria!='evento' AND categoria!='edital'", 3);
    $data['noticias_eventos'] = $this->noticias_anpae_model->get("categoria='evento'", 3);
    $data['noticias_editais'] = $this->noticias_anpae_model->get("categoria='edital'", 3);
		$data['informativos'] = $this->informativos_model->get(array(), 5);
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}
}
