<?php
class Selecoes_arquivos_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'selecoes_arquivos';
	}

	public function get_by_id($id) {
		$selecoes_arquivos = $this->get(array('selecoes_arquivos_id' => $id));
		if (count($selecoes_arquivos) > 0) {
			return $selecoes_arquivos[0];
		}
		return NULL;
	}
}