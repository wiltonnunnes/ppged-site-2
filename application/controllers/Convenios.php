<?php
class Convenios extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('convenios_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = site_url('convenios');
			$config['total_rows'] = $this->convenios_model->get_count();
			$config['per_page'] = 16;
			$config['use_page_numbers'] = TRUE;
			$config['page_query_string'] = TRUE;
			$config['query_string_segment'] = 'page';

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();

			$page = ($this->input->get('page')) ?: 0;
			$data['convenios'] = $this->convenios_model->get(array(), $config['per_page'], $page * $config['per_page']);

			$this->load->view('templates/header');
			$this->load->view('convenios/index', $data);
			$this->load->view('templates/footer');
		} else {
			$convenio = $this->convenios_model->get_by_id($id);
			$this->load->view('templates/header');
			$this->load->view('convenios/convenio', array('convenio' => $convenio));
			$this->load->view('templates/foorer');
		}
	}

	public function recebe_processa_convenio() {
		$data = $this->input->post();
		$this->convenios_model->set($data, array_key_exists('convenio_id', $data) ? array('convenio_id' => $data['convenio_id']) : array());
		redirect('painel_controle/convenios');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		/*
		$config['base_url'] = base_url('index.php/painel_controle/convenios');
		$config['total_rows'] = $this->convenios_model->get_count();
		$config['per_page'] = 16;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 1;
		$data['convenios'] = $this->convenios_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
		*/
		$data['convenios'] = $this->convenios_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/convenios/listar_convenios', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$convenio = $this->convenios_model->get_by_id($id);
		if ($this->convenios_model->remove($convenio))
			unlink('./uploads/convenios/' . $convenio['logomarca']);
		redirect('painel_controle/convenios');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/convenios/adicionar_alterar_convenios');
		$this->load->view('painel_controle/templates/footer');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$convenio = $this->convenios_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/convenios/adicionar_alterar_convenios', array('convenio' => $convenio));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}