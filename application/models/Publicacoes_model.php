<?php
class Publicacoes_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'publicacoes';
	}

	public function get_by_id($id) {
		$publicacoes = $this->get(array('publicacao_id' => $id));
		if (count($publicacoes) > 0) {
			return $publicacoes[0];
		}
		return NULL;
	}

	public function update($data, $id) {
		$this->db->set($data, array('publicacao_id' => $id));
	}

	public function get_ultimo_ano() {
		$this->db->select_max('ano');
		$query = $this->db->get($this->table);
		return $query->row()->ano;
	}

	public function get_anos() {
		$this->db->select('ano');
		$this->db->distinct();
		$this->db->order_by('ano', 'DESC');
		$query = $this->db->get($this->table);

		$anos = array();
		foreach ($query->result_array() as $row) {
			$anos[$row['ano']] = $row['ano'];
		}
		return $anos;
	}
}