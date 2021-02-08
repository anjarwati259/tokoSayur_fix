<?php 
/**
 * 
 */
class Laporan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model');
		//proteksi halaman
		$this->simple_login->cek_login();
	}
	
	public function index()
	{
		//$kategori = $this->kategori_model->listing();

		$data = array(	'title'		=> 'Laporan Penjualan',
						'isi'		=> 'laporan/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function lap_harian()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$id_user = $this->session->userdata('id_user');

		$harian = $this->laporan_model->laporan_harian($tanggal, $bulan, $tahun, $id_user);

		$data = array(	'title'		=> 'Laporan Penjualan Harian',
						'tanggal'	=> $tanggal,
						'bulan'		=> $bulan,
						'tahun'		=> $tahun,
						'lap_harian'=> $harian,
						'isi'		=> 'laporan/harian'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	public function lap_bulanan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$id_user = $this->session->userdata('id_user');

		$bulanan = $this->laporan_model->laporan_bulanan($bulan, $tahun, $id_user);

		$data = array(	'title'		=> 'Laporan Penjualan Bulanan',
						'bulan'		=> $bulan,
						'tahun'		=> $tahun,
						'lap_bulanan' => $bulanan,
						'isi'		=> 'laporan/bulanan'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	public function lap_tahunan()
	{
		$tahun = $this->input->post('tahun');
		$id_user = $this->session->userdata('id_user');

		$tahunan = $this->laporan_model->laporan_tahunan($tahun, $id_user);

		$data = array(	'title'		=> 'Laporan Penjualan Tahunan',
						'tahun'		=> $tahun,
						'lap_tahun' => $tahunan,
						'isi'		=> 'laporan/tahunan'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//laporan admin

	public function admin_harian()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$harian = $this->laporan_model->admin_harian($tanggal, $bulan, $tahun);

		$data = array(	'title'		=> 'Laporan Penjualan Harian',
						'tanggal'	=> $tanggal,
						'bulan'		=> $bulan,
						'tahun'		=> $tahun,
						'lap_harian'=> $harian,
						'isi'		=> 'laporan/harian'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	public function admin_bulanan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$bulanan = $this->laporan_model->admin_bulanan($bulan, $tahun);

		$data = array(	'title'		=> 'Laporan Penjualan Bulanan',
						'bulan'		=> $bulan,
						'tahun'		=> $tahun,
						'lap_bulanan' => $bulanan,
						'isi'		=> 'laporan/bulanan'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	public function admin_tahunan()
	{
		$tahun = $this->input->post('tahun');

		$tahunan = $this->laporan_model->admin_tahunan($tahun);

		$data = array(	'title'		=> 'Laporan Penjualan Tahunan',
						'tahun'		=> $tahun,
						'lap_tahun' => $tahunan,
						'isi'		=> 'laporan/tahunan'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}
 ?>