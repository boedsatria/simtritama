<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

  function get($div = false, $search = false, $limit = false, $offset = false)
  {
    $this->db->from('user');
    $this->db->join('role', 'role_user = id_role');
    if ($div || $div > 0) $this->db->where('role_user', $div);
    if ($search) $this->db->like('nama_user', $search, 'both');
    if ($limit) $this->db->limit($limit, $offset);
    return $this->db->get();
  }

  function get_detail($id)
  {
    $this->db->from('user');
    $this->db->join('role', 'role_user = id_role');
    $this->db->where('id_user', $id);
    return $this->db->get()->row_array();
  }

  function get_files($id)
  {
    $data = $this->get_detail($id);
    return $data['photo_user'];
  }

  function get_role($id = false)
  {
    $this->db->from('role');
    if ($id) $this->db->where('id_role', $id);
    return $this->db->get();
  }
  
  function insert($data)
  {
    $this->db->insert('user', $data);
    return $this->db->insert_id();
  }

  function update($data)
  {
    $this->db->where('id_user', $data['id_user']);
    $this->db->update('user', $data);
  }

  function delete($id)
  {
    $this->db->where('id_user', $id);
    $this->db->delete('user');
  }
}
