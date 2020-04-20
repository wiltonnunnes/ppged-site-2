<?php
class Usuarios_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'usuarios_adm';
	}

	public function get_by_id($id) {
		$usuarios = $this->get(array('usuario_id' => $id));
		if (count($usuarios) > 0) {
			return $usuarios[0];
		}
		return NULL;
	}
}