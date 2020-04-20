<?php
class Selecoes_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'selecoes';
	}

	public function get_by_id($id) {
		$selecoes = $this->get(array('selecoes_id' => $id));
		if (count($selecoes) > 0) {
			return $selecoes[0];
		}
		return NULL;
	}
}