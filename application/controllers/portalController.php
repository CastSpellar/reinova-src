<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PortalController extends CI_Controller {

	public function index()
	{
		$this->load->view('portalView');
	}
}
?>
