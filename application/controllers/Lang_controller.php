<?php
class Lang_controller extends MY_Controller {
	
	public function index() {
		$locale = $this->input->get('locale');

		switch ($locale) {
			case 'pt':
				$this->session->set_userdata('language', 'portuguese');
				break;

			case 'en':
				$this->session->set_userdata('language', 'english');
				break;
			
			default:
				break;
		}

		redirect();
	}
}