<?php
class Pages extends MY_Controller {

	public function view($page = 'home') {
		if (!file_exists(APPPATH . 'views/pages/' . $page)) {
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('pages/' . $page);
		$this->load->view('templates/footer');
	}
}