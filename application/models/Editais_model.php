<?php
class Editais_model extends MY_Model {
	
	public function __construct() {
		parent::__construct();
		$this->table = 'editais';
	}

	public function update($data, $id) {
		$this->db->where('edital_id', $id);
		$this->db->update($this->table, $data);
	}

	public function get_by_id($id) {
		$edital = $this->get(array('edital_id' => $id));
		if (count($edital) > 0) {
			return $edital[0];
		}
		return NULL;
	}
}