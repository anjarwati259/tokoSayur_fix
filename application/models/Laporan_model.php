<?php 
/**
 * 
 */
class Laporan_model extends CI_model
{
	//laporan Tengkulak
	public function laporan_harian($tanggal, $bulan, $tahun, $id_user)
	{
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_detail_transaksi', 'tb_detail_transaksi.kode_transaksi = tb_transaksi.kode_transaksi', 'left');
		$this->db->join('tb_product', 'tb_transaksi.id_product = tb_product.id_product', 'left');
		$this->db->where('DAY(tb_transaksi.tanggal_transaksi)', $tanggal);
		$this->db->where('MONTH(tb_transaksi.tanggal_transaksi)', $bulan);
		$this->db->where('YEAR(tb_transaksi.tanggal_transaksi)', $tahun);
		$this->db->where('tb_transaksi.id_user', $id_user);
		return $this->db->get()->result();
	}

	public function laporan_bulanan($bulan, $tahun, $id_user)
	{
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_detail_transaksi', 'tb_detail_transaksi.kode_transaksi = tb_transaksi.kode_transaksi', 'left');
		//$this->db->join('tb_product', 'tb_transaksi.id_product = tb_product.id_product', 'left');
		//$this->db->where('DAY(tb_transaksi.tanggal_transaksi)', $tanggal);
		$this->db->where('MONTH(tb_transaksi.tanggal_transaksi)', $bulan);
		$this->db->where('YEAR(tb_transaksi.tanggal_transaksi)', $tahun);
		$this->db->where('tb_detail_transaksi.status_bayar !="Belum Bayar"');
		$this->db->where('tb_transaksi.id_user', $id_user);
		return $this->db->get()->result();
	}
	public function laporan_tahunan($tahun, $id_user)
	{
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_detail_transaksi', 'tb_detail_transaksi.kode_transaksi = tb_transaksi.kode_transaksi', 'left');
		$this->db->where('YEAR(tb_transaksi.tanggal_transaksi)', $tahun);
		$this->db->where('tb_detail_transaksi.status_bayar !="Belum Bayar"');
		$this->db->where('tb_transaksi.id_user', $id_user);
		return $this->db->get()->result();
	}
	//laporan admin
	public function admin_harian($tanggal, $bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_detail_transaksi', 'tb_detail_transaksi.kode_transaksi = tb_transaksi.kode_transaksi', 'left');
		$this->db->join('tb_product', 'tb_transaksi.id_product = tb_product.id_product', 'left');
		$this->db->where('DAY(tb_transaksi.tanggal_transaksi)', $tanggal);
		$this->db->where('MONTH(tb_transaksi.tanggal_transaksi)', $bulan);
		$this->db->where('YEAR(tb_transaksi.tanggal_transaksi)', $tahun);
		return $this->db->get()->result();
	}
	public function admin_bulanan($bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_detail_transaksi', 'tb_detail_transaksi.kode_transaksi = tb_transaksi.kode_transaksi', 'left');
		$this->db->where('MONTH(tb_transaksi.tanggal_transaksi)', $bulan);
		$this->db->where('YEAR(tb_transaksi.tanggal_transaksi)', $tahun);
		$this->db->where('tb_detail_transaksi.status_bayar !="Belum Bayar"');
		return $this->db->get()->result();
	}
	public function admin_tahunan($tahun)
	{
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_detail_transaksi', 'tb_detail_transaksi.kode_transaksi = tb_transaksi.kode_transaksi', 'left');
		$this->db->where('YEAR(tb_transaksi.tanggal_transaksi)', $tahun);
		$this->db->where('tb_detail_transaksi.status_bayar !="Belum Bayar"');
		return $this->db->get()->result();
	}
}