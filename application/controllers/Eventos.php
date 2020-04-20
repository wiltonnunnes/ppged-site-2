<?php
class Eventos extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('eventos_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = base_url('index.php/eventos');
			$config['total_rows'] = $this->eventos_model->get_count();
			$config['per_page'] = 10;

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();

			$page = ($this->input->get('page')) ?: 1;
			$data['eventos'] = $this->eventos_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);

			$this->load->view('templates/header');
			if ($this->is_logged_in())
				$this->load->view('templates/menuAdm');
			else
				$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('eventos/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data['evento'] = $this->eventos_model->get_by_id($id);
			$this->load->view('templates/header');
			if ($this->is_logged_in())
				$this->load->view('templates/menuAdm');
			else
				$this->load->view('templates/menu');
			$this->load->view('eventos/evento', $data);
			$this->load->view('templates/footer');
		}
	}

	public function view($id) {
		$data['evento'] = $this->eventos_model->get_by_id($id);
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/eventos/view_evento', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_evento() {
		$config['upload_path'] = './uploads/arquivos/eventos/';
		$config['allowed_types'] = 'pdf|jpg|png';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if ($id = $this->input->post('evento_id')) {
			$data['nome_evento'] = $this->input->post('nome_evento');
			$data['data'] = $this->input->post('data');
			$data['local'] = $this->input->post('local');
			$data['entidade_organizadora'] = $this->input->post('entidade_organizadora');

			if ($this->upload->do_upload('cartaz'))
				$data['cartaz'] = $this->upload->data('file_name');

			$this->eventos_model->update($data, $id);
		} else {
			if ($this->upload->do_upload('cartaz')) {
				$data = $this->input->post();
				$this->eventos_model->set($data);
			}
		}
		redirect('painel_controle/eventos');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/eventos/adicionar_alterar_eventos');
		$this->load->view('painel_controle/templates/footer');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$config['base_url'] = base_url('index.php/painel_controle/eventos');
		$config['total_rows'] = $this->eventos_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		//$data['eventos'] = $this->eventos_model->get(array(), $config['per_page'], $page * $config['per_page']);
		$data['eventos'] = $this->eventos_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/eventos/listar_eventos', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$evento = $this->eventos_model->get_by_id($id);
		if ($this->eventos_model->remove($evento)) {
			unlink(APPPATH . '/uploads/arquivos/eventos/' . $evento['cartaz']);
		}
		redirect('painel_controle/eventos');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$evento = $this->eventos_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('painel_controle/eventos/adicionar_alterar_eventos', array('evento' => $evento));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}

}