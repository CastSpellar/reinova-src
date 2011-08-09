<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ServicesController extends CI_Controller {

	public function index()
	{
		$this->load->view('servicesView');
	}
}
?>
