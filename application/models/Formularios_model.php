<?php
class Formularios_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'formularios';
	}

	public function get_by_id($id) {
		$formularios = $this->get(array('formularios_id' => $id));
		if (count($formularios) > 0) {
			return $formularios[0];
		}
		return NULL;
	}

	public function update($data, $id) {
		$this->set($data, array('formularios_id' => $id));
	}
}