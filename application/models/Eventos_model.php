<?php
class Eventos_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'eventos';
	}

	public function get_by_id($id) {
		$eventos = $this->get(array('evento_id' => $id));
		if (count($eventos) > 0) {
			return $eventos[0];
		}
		return NULL;
	}

	public function update($data, $id) {
		$this->set($data, array('evento_id' => $id));
	}
}