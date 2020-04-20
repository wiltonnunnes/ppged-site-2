<?php
class Noticias_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'noticias_anpae';
		$this->primaryKey = 'noticia_id';
	}
}