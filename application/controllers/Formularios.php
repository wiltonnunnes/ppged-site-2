<?php
class Formularios extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('formularios_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = base_url('index.php/formularios');
			$config['total_rows'] = $this->formularios_model->get_count();
			$config['per_page'] = 16;

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();

			$page = ($this->input->get('page')) ?: 1;
			$data['formularios'] = $this->formularios_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);

			$this->load->view('templates/header');
			if ($this->is_logged_in())
				$this->load->view('templates/menuAdm');
			else
				$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('formularios/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data['formulario'] = $this->formularios_model->get_by_id($id);
			$this->load->view('templates/header');
			$this->load->view('formularios/formulario', $data);
			$this->load->view('templates/footer');
		}
	}

	public function view($id) {
		$data['formulario'] = $this->formularios_model->get_by_id($id);
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/formularios/view_formulario', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_formulario() {
		$config['upload_path'] = './uploads/arquivos/formularios/pdf/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if (count($_FILES) == 2) {
			$this->upload->do_upload('arquivo_pdf');
			$data['arquivo_pdf'] = $this->upload->data('file_name');

			$config['upload_path'] = './uploads/arquivos/formularios/docx/';
			$config['allowed_types'] = 'docx|doc|odt';
			$config['max_size'] = 0;

			$this->upload->initialize($config);
			$this->upload->do_upload('arquivo_docx');
			$data['arquivo_docx'] = $this->upload->data('file_name');

			$data = array_merge($data, $this->input->post());
			$this->formularios_model->set($data, isset($data['formularios_id']) ? array('formularios_id' => $data['formularios_id']) : array());
		}
		redirect('painel_controle/formularios');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/formularios/adicionar_alterar_formularios');
		$this->load->view('painel_controle/templates/footer');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		/*
		$config['base_url'] = base_url('index.php/painel_controle/formularios');
		$config['total_rows'] = $this->formularios_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['formularios'] = $this->formularios_model->get(array(), $config['per_page'], $page * $config['per_page']);
		*/
		$data['formularios'] = $this->formularios_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/formularios/listar_formularios', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$formulario = $this->formularios_model->get_by_id($id);
		if ($this->formularios_model->remove($formulario)) {
			unlink('./uploads/arquivos/formularios/pdf/' . $formulario['arquivo_pdf']);
			unlink('./uploads/arquivos/formularios/docx/' . $formulario['arquivo_docx']);
		}
		redirect('painel_controle/formularios');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$formulario = $this->formularios_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/formularios/adicionar_alterar_formularios', array('formulario' => $formulario));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}