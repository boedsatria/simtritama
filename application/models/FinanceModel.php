<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FinanceModel extends CI_Model
{

  function get($wilayah = false, $mulai = false, $selesai = false)
  {
    $this->db->from('petty_cash');
    if ($wilayah > 0) $this->db->where('wilayah_pc', $wilayah);

    $this->db->where('tanggal_pc >=', $mulai);
    $this->db->where('tanggal_pc <=', $selesai);

    return $this->db->get();
    // print_r($this->db->last_query());die;
  }

  function get_placement_data($jenis = false, $search = false, $limit = false, $offset = false)
  {
    $this->db->from('project');
    if ($search) $this->db->like('nama_project', $search, 'both');
    if ($limit) $this->db->limit($limit, $offset);
    if ($jenis) $this->db->where('jenis_project', $jenis);
    $this->db->join('client', 'id_client = client_project', 'LEFT');
    $this->db->where('jenis_project > ', '1');
    // $this->db->get();
    // print_r($this->db->last_query());die;
    return $this->db->get();
  }

  function get_area_coa()
  {
    $this->db->from('coa_akun');
    $this->db->where('area_coa', 1);
    return $this->db->get();
  }
  function get_coa()
  {
    $this->db->from('coa_akun');
    return $this->db->get();
  }

  function get_user()
  {
    $this->db->from('user');
    // $this->db->join('client', 'id_client = client_project', 'LEFT');
    return $this->db->get();
  }

  function insert($data)
  {
    // print_r($data);die;
    $this->db->insert('petty_cash', $data);
    return $this->db->insert_id();
  }

}
