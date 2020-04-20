<?php
class Convenios_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'convenios';
	}

	public function get_by_id($id) {
		$convenios = $this->get(array('convenio_id' => $id));
		if (count($convenios) > 0) {
			return $convenios[0];
		}
		return NULL;
	}

	public function remove($id) {
		return parent::remove(array('convenio_id' => $id));
	}

	public function search($keyword) {
		$this->db->like('nome', $keyword, 'after');
		$query = $this->db->get($this->table);
		return $query->result_array();
	}
}