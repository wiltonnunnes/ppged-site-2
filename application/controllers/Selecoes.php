<?php
class Selecoes extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array('selecoes_model', 'selecoes_arquivos_model'));
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = site_url('selecoes');
			$config['total_rows'] = $this->selecoes_model->get_count();
			$config['per_page'] = 16;

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();

			$page = ($this->input->get('page')) ?: 1;
			//$data['selecoes'] = $this->selecoes_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
			$data['selecoes'] = $this->selecoes_model->get();

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('selecoes/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data['selecoes_arquivos'] = $this->selecoes_arquivos_model->get(array('selecoes_id' => $id));
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('selecoes/selecao', $data);
			$this->load->view('templates/footer');
		}
	}

	public function adicionar() {
		if (!$this->is_logged_in()) {
			redirect('painel_controle');
		}
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/selecoes/adicionar_alterar_selecoes');
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_selecao() {
		$config['upload_path'] = './uploads/arquivos/selecoes/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if ($id = $this->input->post('selecao_id')) {
			$data['titulo'] = $this->input->post('titulo');
			$data['data'] =$this->input->post('data');
			if ($this->upload->do_upload('arquivo')) {
				$data['arquivo'] = $this->upload->data('file_name');
			}
			$this->selecoes_model->update($data, $id);
		} else {
			if ($this->upload->do_upload('arquivo'))
				$this->selecoes_model->set($this->input->post());
		}
		redirect('painel_controle/selecoes');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$config['base_url'] = site_url('painel_controle/selecoes');
		$config['total_rows'] = $this->selecoes_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['selecoes'] = $this->selecoes_model->get(array(), $config['per_page'], $page * $config['per_page']);

		$this->load->view('painel_controle/templates/header', $data);
		$this->load->view('painel_controle/selecoes/listar_selecoes', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$selecao = $this->selecoes_model->get_by_id($id);
		if ($this->selecoes_model->remove($selecao)) {
			unlink(APPPATH . '/uploads/arquivos/selecoes/' . $selecao['arquivo']);
		}
		redirect('painel_controle/selecoes');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$selecao = $this->selecoes_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/selecoes/adicionar_alterar_selecoes', array('selecao' => $selecao));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}