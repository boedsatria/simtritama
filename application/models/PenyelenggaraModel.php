<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PenyelenggaraModel extends CI_Model
{

  function get($kbli = false, $search = false, $limit = false, $offset = false)
  {
    $this->db->from('penyelenggara');
    if ($kbli) $this->db->like('kbli_penyelenggara', $kbli, 'both');
    if ($search) $this->db->like('nama_penyelenggara', $search, 'both');
    if ($limit) $this->db->limit($limit, $offset);
    return $this->db->get();
  }

  function get_detail($id)
  {
    $this->db->from('penyelenggara');
    $this->db->where('id_penyelenggara', $id);
    return $this->db->get()->row_array();
  }

  function get_files($id)
  {
    $data = $this->get_detail($id);
    return $data['photo_penyelenggara'];
  }

  function get_kbli($id = false)
  {
    $this->db->from('kbli');
    if ($id) $this->db->where('id_kbli', $id);
    return $this->db->get();
  }
  function insert_kbli($data)
  {
    $this->db->insert('kbli', $data);
  }


  function insert($data)
  {
    $this->db->insert('penyelenggara', $data);
    return $this->db->insert_id();
  }

  function update($data)
  {
    $this->db->where('id_penyelenggara', $data['id_penyelenggara']);
    $this->db->update('penyelenggara', $data);
  }

  function delete($id)
  {
    $this->db->where('id_penyelenggara', $id);
    $this->db->delete('penyelenggara');
  }
}
