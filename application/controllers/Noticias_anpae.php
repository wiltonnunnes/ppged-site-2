<?php
class Noticias_anpae extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('noticias_anpae_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = site_url('noticias_anpae');
			//$config['total_rows'] = $this->noticias_anpae_model->get_count();
			$config['per_page'] = 5;

			$page = ($this->input->get('page')) ?: 1;
			$titulo = $this->input->get('titulo');
			if ($titulo) {
				$data['noticias_anpae'] = $this->noticias_anpae_model->search($titulo, $config['per_page'], ($page - 1) * $config['per_page']);
				$config['suffix'] = '&titulo=' . $titulo;
				$config['total_rows'] = count($data['noticias_anpae']);
			} else {
				$data['noticias_anpae'] = $this->noticias_anpae_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
				$config['suffix'] = '';
				$config['total_rows'] = $this->noticias_anpae_model->get_count();
			}

			$this->pagination->initialize($config);
			$data['links'] = $this->pagination->create_links();

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('noticias_anpae/index', $data);
			$this->load->view('templates/footer');
		} else {
			$noticia_anpae = $this->noticias_anpae_model->get_by_id($id);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('noticias_anpae/noticia_anpae', array('noticia_anpae' => $noticia_anpae));
			$this->load->view('templates/footer');
		}
	}

	public function recebe_processa_noticia_anpae() {
		$data = $this->input->post();

		$config['upload_path'] = './uploads/arquivos/noticias_anpae/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if ($this->upload->do_upload('imagem'))
			$data['imagem'] = $this->upload->data('file_name');

		$this->noticias_anpae_model->set($data, array_key_exists('noticia_id', $data) ? array('noticia_id' => $data['noticia_id']) : array());
		redirect('painel_controle/noticias_anpae');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		/*
		$config['base_url'] = base_url('index.php/painel_controle/noticias_anpae');
		$config['total_rows'] = $this->noticias_anpae_model->get_count();
		$config['per_page'] = 16;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 1;
		$data['noticias_anpae'] = $this->noticias_anpae_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
		*/
		$data['noticias_anpae'] = $this->noticias_anpae_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/noticias_anpae/listar_noticias_anpae', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$noticia_anpae = $this->noticias_anpae_model->get_by_id($id);
		if ($this->noticias_anpae_model->remove($noticia_anpae) && $noticia_anpae['imagem'])
			unlink('./uploads/arquivos/noticias_anpae/' . $noticia_anpae['imagem']);
		redirect('painel_controle/noticias_anpae');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/noticias_anpae/adicionar_alterar_noticias_anpae');
		$this->load->view('painel_controle/templates/footer');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$noticia_anpae = $this->noticias_anpae_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('painel_controle/noticias_anpae/adicionar_alterar_noticias_anpae', array('noticia_anpae' => $noticia_anpae));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}

	public function get() {
		$keyword = $this->input->get('q');
		$data['noticias_anpae'] = $this->noticias_anpae_model->search($keyword);
		$this->output->set_status_header(200)->set_content_type('application/json', 'utf-8')->set_output(json_encode($data));
	}
}
