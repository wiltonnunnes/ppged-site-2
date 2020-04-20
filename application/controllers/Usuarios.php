<?php
class Usuarios extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usuarios_model');
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('usuarios/login');
		$this->load->view('templates/footer');
	}

	public function listar() {
		$usuarios = $this->usuarios_model->get();
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/usuarios/listar_usuarios', array('usuarios' => $usuarios));
		$this->load->view('painel_controle/templates/footer');
	}

	public function login() {
		$login = $this->input->post('login');
		$senha = sha1($this->input->post('senha'));
		$usuarios = $this->usuarios_model->get(array('login' => $login, 'senha' => $senha));

		if (!empty($usuarios)) {
			$usuario = $usuarios[0];
			$this->session->set_userdata(array('user_logged' => $usuario));
			redirect('usuarios/alterar/' . $usuario['usuario_id']);
		} else {
			redirect('painel_controle');
		}
	}

	public function view($id) {
		$usuario = $this->usuarios_model->get_by_id($id);
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/usuarios/usuario', array('usuario' => $usuario));
		$this->load->view('painel_controle/templates/footer');
	}

	public function alterar($id) {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$usuario = $this->usuarios_model->get_by_id($id);
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/usuarios/adicionar_alterar_usuarios', array('usuario' => $usuario));
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$this->usuarios_model->remove(array('usuario_id' => $id));
		redirect('painel_controle/usuarios');
	}

	public function logout() {
		$this->session->unset_userdata('user_logged');
		redirect();
	}

	public function recebe_processa_usuario() {
	}

	public function alterar_senha($id) {
		$data = $this->input->post();
		$this->usuarios_model->set($data, array_key_exists("usuario_id", $data) ? array('usuario_id' => $data['usuario_id']) : array());
		redirect('painel_controle/usuarios');
	}
}