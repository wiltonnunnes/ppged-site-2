<?php
class MY_Model extends CI_Model {
	
	public $table = NULL;

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get($where = array(), $limit = -1, $start = 0) {
		$limit = $limit < 0 ? $this->get_count() : $limit;
		$this->db->where($where);
		$this->db->order_by($this->get_primary_key(), 'DESC'); 
		$query = $this->db->get($this->table, $limit, $start);
		return $query->result_array();
	}

	public function get_count() {
		return $this->db->count_all($this->table);
	}

	public function set($data, $where = array()) {
		if ($where) {
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update($this->table);
		} else
			$this->db->insert($this->table, $data);
	}

	public function remove($data) {
		if ($this->db->delete($this->table, $data))
			return true;
		else
			return false;
	}

	public function data_exists($data) {
		$this->db->where($data);
		return $this->db->count_all_results($this->table) > 0;
	}

	private function get_primary_key() {
		$fields = $this->db->field_data($this->table);
		foreach ($fields as $field) {
			if ($field->primary_key === 1)
				return $field->name;
		}
		return NULL;
	}
}