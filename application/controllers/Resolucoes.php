<?php
class Resolucoes extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('resolucoes_model');
	}

	public function index() {
		$config['base_url'] = site_url('resolucoes');
		$config['total_rows'] = $this->resolucoes_model->get_count();
		$config['per_page'] = 16;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 1;
		$data['resolucoes_ppged'] = $this->resolucoes_model->get(array('orgao' => 'PPGED'), -1, ($page - 1) * $config['per_page']);
		$data['resolucoes_consepe'] = $this->resolucoes_model->get(array('orgao' => 'CONSEPE'), -1, ($page - 1) * $config['per_page']);

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('resolucoes/index', $data);
		$this->load->view('templates/footer');
	}

	public function adicionar() {
		if (!$this->is_logged_in()) {
			redirect('painel_controle');
		}
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/resolucoes/adicionar_alterar_resolucoes');
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_selecao() {
		$config['upload_path'] = './uploads/arquivos/resolucoes/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if ($id = $this->input->post('selecao_id')) {
			$data['titulo'] = $this->input->post('titulo');
			$data['data'] =$this->input->post('data');
			if ($this->upload->do_upload('arquivo')) {
				$data['arquivo'] = $this->upload->data('file_name');
			}
			$this->resolucoes_model->update($data, $id);
		} else {
			if ($this->upload->do_upload('arquivo'))
				$this->resolucoes_model->set($this->input->post());
		}
		redirect('painel_controle/resolucoes');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		/*
		$config['base_url'] = site_url('painel_controle/resolucoes');
		$config['total_rows'] = $this->resolucoes_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['resolucoes'] = $this->resolucoes_model->get(array(), $config['per_page'], $page * $config['per_page']);
		*/
		$data['resolucoes'] = $this->resolucoes_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/resolucoes/listar_resolucoes', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$selecao = $this->resolucoes_model->get_by_id($id);
		if ($this->resolucoes_model->remove($selecao)) {
			unlink(APPPATH . '/uploads/arquivos/resolucoes/' . $selecao['arquivo']);
		}
		redirect('painel_controle/resolucoes');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$selecao = $this->resolucoes_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/resolucoes/adicionar_alterar_resolucoes', array('selecao' => $selecao));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}