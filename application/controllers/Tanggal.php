<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanggal extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('VaksinModel');
	}

	public function index()
	{
		$data['tanggal'] = $this->VaksinModel->get_tanggal()->result();
		$data['lokasi'] = $this->VaksinModel->get_lokasi()->result();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('tanggal_vaksin_list', $data);
		$this->load->view('footer');
	}

	public function tambah_data_tanggal($loc)
	{
		$tl = explode("/", $_POST['tanggal_tv']);
		$tanggal_tv = $tl[2].'-'.$tl[1].'-'.$tl[0];

		$data = array(
			'tanggal_tv'	=> $tanggal_tv,
			'lokasi_tv'		=> $loc
		);
		$data = $this->VaksinModel->insert_tanggal_vaksin($data);

		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil ditambah!",
					icon: "success"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal ditambah!",
					icon: "error"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		endif;
	}

	public function tambah_jam($tgl, $loc)
	{
		$data = array(
			'jam_jv'			=> $_POST['jam_jv'],
			'tanggal_jv'		=> $tgl,
			'quota_jv'			=> $_POST['quota_jv'],
		);
		$data = $this->VaksinModel->insert_jam_vaksin($data);

		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil ditambah!",
					icon: "success"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal ditambah!",
					icon: "error"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		endif;
	}

	public function edit_tanggal($id, $loc)
	{
		$tl = explode("/", $_POST['tanggal_tv']);
		$tanggal_tv = $tl[2].'-'.$tl[1].'-'.$tl[0];

		$data = array(
			'id_tv'				=> $id,
			'tanggal_tv'		=> $tanggal_tv
		);
		$data = $this->VaksinModel->edit_tanggal_vaksin($data);

		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil diubah!",
					icon: "success"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal diubah!",
					icon: "error"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		endif;
	}

	public function hapus_tanggal($id, $loc)
	{

		$this->VaksinModel->hapus_tanggal_vaksin($id);
		$data = $this->VaksinModel->hapus_jam_vaksin_by_tanggal($id);

		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil dihapus!",
					icon: "success"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal dihapus!",
					icon: "error"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		endif;
	}

	public function hapus_jam($id, $loc)
	{

		$data = $this->VaksinModel->hapus_jam_vaksin($id);

		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil dihapus!",
					icon: "success"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal dihapus!",
					icon: "error"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		endif;
	}

	public function edit_jam($id, $loc)
	{
		$data = array(
			'jam_jv'			=> $_POST['jam_jv'],
			'id_jv'				=> $id,
			'quota_jv'			=> $_POST['quota_jv'],
		);
		$data = $this->VaksinModel->edit_jam_vaksin($data);

		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil diubah!",
					icon: "success"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal diubah!",
					icon: "error"
				});
			');
			redirect(base_url('tanggal?loc='.$loc));
		endif;
	}



}
