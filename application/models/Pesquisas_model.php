<?php
class Pesquisas_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'pesquisas';
	}

	public function get_by_id($id) {
		$pesquisas = $this->get(array('pesquisa_id' => $id));
		if (count($pesquisas) > 0) {
			$pesquisa = $pesquisas[0];
			return $pesquisas[0];
		}
		return NULL;
	}

	public function remove($id) {
		return parent::remove(array('pesquisa_id' => $id));
	}

	public function insert($data) {
		if ($this->db->insert($this->table, $data))
			return $this->db->insert_id();
		return NULL;
	}

	public function update($data, $id) {
		$this->db->where('pesquisa_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function search($keyword) {
		$this->db->like('titulo', $keyword, 'after');
		$query = $this->db->get($this->table);
		return $query->result_array();
	}
}