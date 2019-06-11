<?php
class About extends CI_Controller
{


	public function index()
	{

		$data['judul'] = "About";
		$this->load->view('template/header.php', $data);
		$this->load->view('about/index.php');
		$this->load->view('template/footer.php');
	}
}
