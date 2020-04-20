<?php
class Informativos_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'informativos';
	}

	public function get_by_id($id) {
		$informativos = $this->get(array('informativo_id' => $id));
		if (count($informativos) > 0) {
			return $informativos[0];
		}
		return NULL;
	}

	public function remove($id) {
		return parent::remove(array('informativo_id' => $id));
	}

	public function update($data, $id) {
		$this->db->set($data, array('informativo_id' => $id));
	}

	public function search($str, $limit = -1, $start = 0) {
		$limit = $limit < 0 ? $this->get_count() : $limit;
		$this->db->like('titulo', $str);
		$query = $noticias_anpae = $this->db->get($this->table, $limit, $start);
		return $query->result_array();
	}

	public function change_status($id, $new_status) {
		$this->db->set('status', $new_status);
		$this->db->where('informativo_id', $id);
		$this->db->update($this->table);
	}
}