<?php


class Blog extends CI_Controller
{



	public function index()
	{
		$data['judul'] = 'Blog';
		// $data['nama'] = $nama;
		$this->load->view('template/header.php', $data);
		$this->load->view('blog/index.php');
		$this->load->view('template/footer.php');
	}
}
