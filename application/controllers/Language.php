<?php
class Language extends MY_Controller {
	
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

		$uri = $this->agent->is_referral() ? '' : $this->agent->referrer();
		$uri = str_replace('?' . parse_url($uri, PHP_URL_QUERY), '', $uri);
		redirect($uri . '?locale=' . $locale); 
	}
}