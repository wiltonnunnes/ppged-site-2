<?php
class Editais extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('editais_model');
	}

	public function index() {
		$config['base_url'] = site_url('editais');
		$config['total_rows'] = $this->editais_model->get_count();
		$config['per_page'] = 16;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 1;
		$data['editais'] = $this->editais_model->get(array(), -1, ($page - 1) * $config['per_page']);

		$this->load->view('templates/header');
		if ($this->is_logged_in())
			$this->load->view('templates/menuAdm');
		else
			$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('editais/index', $data);
		$this->load->view('templates/footer');
	}

	public function adicionar() {
		if (!$this->is_logged_in()) {
			redirect('painel_controle');
		}
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/editais/adicionar_alterar_editais');
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_edital() {
		$config['upload_path'] = './uploads/arquivos/editais/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if ($id = $this->input->post('edital_id')) {
			$data['titulo'] = $this->input->post('titulo');
			$data['data'] =$this->input->post('data');
			if ($this->upload->do_upload('arquivo')) {
				$data['arquivo'] = $this->upload->data('file_name');
			}
			$this->editais_model->update($data, $id);
		} else {
			if ($this->upload->do_upload('arquivo'))
				$this->editais_model->set($this->input->post());
		}
		redirect('painel_controle/editais');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		/*
		$config['base_url'] = site_url('painel_controle/editais');
		$config['total_rows'] = $this->editais_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['editais'] = $this->editais_model->get(array(), $config['per_page'], $page * $config['per_page']);
		*/
		$data['editais'] = $this->editais_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/editais/listar_editais', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$edital = $this->editais_model->get_by_id($id);
		if ($this->editais_model->remove($edital)) {
			unlink(APPPATH . '/uploads/arquivos/editais/' . $edital['arquivo']);
		}
		redirect('painel_controle/editais');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$edital = $this->editais_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('painel_controle/editais/adicionar_alterar_editais', array('edital' => $edital));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}