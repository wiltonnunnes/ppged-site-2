<?php
class Informativos extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('informativos_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = site_url('informativos');
			//$config['total_rows'] = $this->informativos_model->get_count();
			$config['per_page'] = 5;

			$page = ($this->input->get('page')) ?: 1;
			$titulo = $this->input->get('titulo');
			if ($titulo) {
				$data['informativos'] = $this->informativos_model->search($titulo, $config['per_page'], ($page - 1) * $config['per_page']);
				$config['suffix'] = '&titulo=' . $titulo;
				$config['total_rows'] = count($data['informativos']);
			} else {
				$data['informativos'] = $this->informativos_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
				$config['suffix'] = '';
				$config['total_rows'] = $this->informativos_model->get_count();
			}

			$this->pagination->initialize($config);
			$data['links'] = $this->pagination->create_links();

			$this->load->view('templates/header');
			if ($this->is_logged_in())
				$this->load->view('templates/menuAdm');
			else
				$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('informativos/index', $data);
			$this->load->view('templates/footer');
		} else {
			$informativo = $this->informativos_model->get_by_id($id);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('informativos/informativo', array('informativo' => $informativo));
			$this->load->view('templates/footer');
		}
	}

	public function adicionar() {
		if (!$this->is_logged_in()) {
			redirect('painel_controle');
		}
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/informativos/adicionar_alterar_informativos');
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_informativo() {
		$data = $this->input->post();
		if (!isset($data['status'])) $data['status'] = "0";

		$config['upload_path'] = './uploads/arquivos/informativos/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if ($this->upload->do_upload('imagem'))
			$data['imagem'] = $this->upload->data('file_name');

		$this->informativos_model->set($data, array_key_exists('informativo_id', $data) ? array('informativo_id' => $data['informativo_id']) : array());

		redirect('painel_controle/informativos');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$config['base_url'] = site_url('painel_controle/informativos');
		$config['total_rows'] = $this->informativos_model->get_count();
		$config['per_page'] = 16;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 1;
		//$data['informativos'] = $this->informativos_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
		$data['informativos'] = $this->informativos_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/informativos/listar_informativos', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$informativo = $this->informativos_model->get_by_id($id);
		if ($this->informativos_model->remove($informativo) && $informativo['imagem'])
			unlink('./uploads/arquivos/informativos/' . $informativo['imagem']);
		redirect('painel_controle/informativos');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$informativo = $this->informativos_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/informativos/adicionar_alterar_informativos', array('informativo' => $informativo));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}

	public function alterar_status($id) {
		$informativo = $this->informativos_model->get_by_id($id);
		$new_status = $informativo['status'] == '0' ? '1' : '0';
		$this->informativos_model->change_status($id, $new_status);
		redirect('painel_controle/informativos');
	}
}