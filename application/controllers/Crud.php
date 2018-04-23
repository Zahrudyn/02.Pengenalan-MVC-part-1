<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$query = $this->db->get('artikel');

		$parser = array (
			'artikel' => $query->result_array()
			);

		$this->load->view('pages/forms', $parser);
	}

	public function add() {
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');
		$email = $this->input->post('email');
		$kategori = $this->input->post('kategori');
		$data = array(
			'id' => '',
			'judul' => $judul,
			'isi' => $isi,
			'tgl_post' => '',
			'penulis' => $penulis,
			'email ' => $email,
			'kategori' => $kategori
		);

		$this->crud_model->insert_entry('artikel', $data);
		
		$query = $this->db->get('artikel');

		$parser = array (
			'artikel' => $query->result_array()
			);

		$this->load->view('pages/forms', $parser);
	}

	public function form_update($id) {
		$this->db->where('id', $id);
		$query = $this ->db->get('artikel');

		$parser = array (
			'id' => $id,
			'artikel' => $query->result_array()
			);

		$this->load->view('pages/form_update', $parser);
	}

	public function update() {
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');
		$email = $this->input->post('email');
		$kategori = $this->input->post('kategori');
		$data = array(
			'id' => $id,
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis,
			'email' => $email,
			'kategori' => $kategori
		);

		$this->crud_model->update_entry('artikel', $data, $id);
		
		$query = $this->db->get('artikel');

		$parser = array (
			'artikel' => $query->result_array()
			);

		$this->load->view('pages/forms', $parser);
	}

	public function delete($id) {
		$this->crud_model->delete_entry('artikel', $id);
		
		$query = $this->db->get('artikel');

		$parser = array (
			'artikel' => $query->result_array()
			);

		$this->load->view('pages/forms', $parser);
	}
}
