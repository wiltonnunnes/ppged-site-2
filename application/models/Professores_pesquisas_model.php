<?php
class Professores_pesquisas_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'professores_pesquisas';
	}

	public function get_professores($pesquisa_id) {
		$query = $this->db->query('SELECT * FROM professores INNER JOIN '.$this->table.' ON professores.professor_id='.$this->table.'.professor_id WHERE '.$this->table.'.pesquisa_id='.$pesquisa_id);
		return $query->result_array();
	}
}