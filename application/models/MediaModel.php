<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MediaModel extends CI_Model
{

  function get($cat = false, $type = false, $wil = false, $search = false, $limit = false, $offset = false)
  {
    $this->db->from('media');
    $this->db->join('media_category', 'kategori_media = id_media_category');
    $this->db->join('media_type', 'type_media = id_media_type');
    $this->db->join('wilayah', 'wilayah_media = id_wilayah');
    if ($cat || $cat > 0) $this->db->where('kategori_media', $cat);
    if ($type || $type > 0) $this->db->where('type_media', $type);
    if ($wil || $wil > 0) $this->db->where('wilayah_media', $wil);
    if ($search) $this->db->like('nama_media', $search, 'both');
    if ($limit) $this->db->limit($limit, $offset);
    return $this->db->get();
  }

  function get_detail($id)
  {
    $this->db->from('media');
    $this->db->join('media_category', 'kategori_media = id_media_category');
    $this->db->join('media_type', 'type_media = id_media_type');
    $this->db->join('wilayah', 'wilayah_media = id_wilayah');
    $this->db->where('id_media', $id);
    return $this->db->get()->row_array();
  }

  function get_files($id)
  {
    $data = $this->get_detail($id);
    return $data['photo_media'];
  }

  function get_cat($id = false)
  {
    $this->db->from('media_category');
    if ($id) $this->db->where('id_media_category', $id);
    return $this->db->get();
  }
  function insert_cat($data)
  {
    $this->db->insert('media_category', $data);
  }
  function get_type_media($id)
  {
    $this->db->from('media_type');
    $this->db->where('parent_media_type', $id);
    return $this->db->get();
  }
  function get_type($id = false)
  {
    $this->db->from('media_type');
    if ($id) $this->db->where('id_media_type', $id);
    return $this->db->get();
  }
  function insert_type($data)
  {
    $this->db->insert('media_type', $data);
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
    $this->db->insert('media', $data);
    return $this->db->insert_id();
  }

  function update($data)
  {
    $this->db->where('id_media', $data['id_media']);
    $this->db->update('media', $data);
  }

  function delete($id)
  {
    $this->db->where('id_media', $id);
    $this->db->delete('media');
  }
}
