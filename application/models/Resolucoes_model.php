<?php
class Resolucoes_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'resolucoes';
	}

	public function get_by_id($id) {
		$resolucoes = $this->get(array('resolucoes_id' => $id));
		if (count($resolucoes) > 0) {
			return $resolucoes[0];
		}
		return NULL;
	}
}