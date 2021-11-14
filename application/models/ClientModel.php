<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClientModel extends CI_Model
{

  function get($cat = false, $wil = false, $search = false, $limit = false, $offset = false)
  {
    $this->db->from('client');
    $this->db->join('client_category', 'kategori_client = id_client_category');
    $this->db->join('wilayah', 'wilayah_client = id_wilayah');
    if ($cat || $cat > 0) $this->db->where('kategori_client', $cat);
    if ($wil || $wil > 0) $this->db->where('wilayah_client', $wil);
    if ($search) $this->db->like('nama_client', $search, 'both');
    if ($limit) $this->db->limit($limit, $offset);
    return $this->db->get();
  }

  function get_detail($id)
  {
    $this->db->from('client');
    $this->db->join('client_category', 'kategori_client = id_client_category');
    $this->db->join('wilayah', 'wilayah_client = id_wilayah');
    $this->db->where('id_client', $id);
    return $this->db->get()->row_array();
  }

  function get_files($id)
  {
    $data = $this->get_detail($id);
    return $data['photo_client'];
  }

  function get_cat($id = false)
  {
    $this->db->from('client_category');
    if ($id) $this->db->where('id_client_category', $id);
    return $this->db->get();
  }
  function insert_cat($data)
  {
    $this->db->insert('client_category', $data);
  }

  function get_wil($id = false)
  {
    $this->db->from('wilayah');
    if ($id) $this->db->where('id_wilayah', $id);
    return $this->db->get();
  }
  function insert_wil($data)
  {
    $this->db->insert('wilayah', $data);
  }

  function insert($data)
  {
    $this->db->insert('client', $data);
    return $this->db->insert_id();
  }

  function update($data)
  {
    $this->db->where('id_client', $data['id_client']);
    $this->db->update('client', $data);
  }

  function delete($id)
  {
    $this->db->where('id_client', $id);
    $this->db->delete('client');
  }
}
