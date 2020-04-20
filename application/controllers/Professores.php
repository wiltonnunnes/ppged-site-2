<?php
class Professores extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('professores_model');
		$this->load->model('pesquisas_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = site_url('professores');
			$config['total_rows'] = $this->professores_model->get_count();
			$config['per_page'] = 16;

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();

			$page = ($this->input->get('page')) ?: 1;
			//$data['professores'] = $this->professores_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
			$data['professores'] = $this->professores_model->get();

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('professores/index', $data);
			$this->load->view('templates/footer');
		} else {
			$professor = $this->professores_model->get_by_id($id);
			$this->load->view('templates/header');
			$this->load->view('professores/professor', array('professor' => $professor));
			$this->load->view('templates/foorer');
		}
	}

	public function recebe_processa_professor() {
		$data = $this->input->post();
		$this->professores_model->set($data, array_key_exists('professor_id', $data) ? array('professor_id' => $data['professor_id']) : array());
		redirect('painel_controle/professores');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		/*
		$config['base_url'] = base_url('index.php/painel_controle/professores');
		$config['total_rows'] = $this->professores_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['professores'] = $this->professores_model->get(array(), $config['per_page'], $page * $config['per_page']);
		*/
		$data['professores'] = $this->professores_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/professores/listar_professores', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$this->professores_model->remove($id);
		redirect('painel_controle/professores');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$data['pesquisas'] = $this->pesquisas_model->get();
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/professores/adicionar_alterar_professores', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$data['professor'] = $this->professores_model->get_by_id($id);
			$data['pesquisas'] = $this->pesquisas_model->get();
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/professores/adicionar_alterar_professores', $data);
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}

	public function get_professores() {
		$data = $this->professores_model->search($this->input->get('q'));
		echo json_encode($data);
	}
}
