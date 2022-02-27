<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProjectModel extends CI_Model
{

  function get($jenis = false, $search = false, $limit = false, $offset = false)
  {
    $this->db->from('project');
    if ($search) $this->db->like('nama_project', $search, 'both');
    if ($limit) $this->db->limit($limit, $offset);
    if($jenis == 1):
      $this->db->where('jenis_project', 1);
      $this->db->or_where('jenis_project', 3);
    elseif($jenis == 2):
      $this->db->where('jenis_project', 2);
      $this->db->or_where('jenis_project', 3);
    else:
      $this->db->where('jenis_project <=', $jenis);
    endif;
    $this->db->join('client', 'id_client = client_project', 'LEFT');
    // $this->db->get();
    // print_r($this->db->last_query());die;
    return $this->db->get();
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

  function get_detail($id)
  {
    $this->db->from('project');
    $this->db->join('client', 'id_client = client_project', 'LEFT');
    $this->db->join('penyelenggara', 'id_penyelenggara = pelaksana_project', 'LEFT');
    $this->db->where('id_project', $id);
    $data = $this->db->get()->row_array();
    $data['produksi'] = $this->get_produksi($data['id_project']);
    $data['placement'] = $this->get_placement($data['id_project']);
    return $data;
  }

  function get_placement($id)
  {
    $this->db->from('project_placement');
    $this->db->join('media_category', 'id_media_category = kategory_pm', 'LEFT');
    $this->db->join('media_type', 'id_media_type = jenis_pm', 'LEFT');
    $this->db->join('media', 'id_media = wilayah_pm', 'LEFT');
    $this->db->join('wilayah', 'id_wilayah= wilayah_media', 'LEFT');
    $this->db->where('parent_pm', $id);
    $data = $this->db->get()->result_array();
    return $data;
  }
  function get_produksi($id)
  {
    $this->db->from('project_produksi');
    $this->db->join('produksi_category', 'id_pc = kategori_pp', 'LEFT');
    $this->db->where('parent_pp', $id);
    $data = $this->db->get()->result_array();
    return $data;
  }
  function get_cat_pla()
  {
    $this->db->from('media_category');
    $data = $this->db->get()->result_array();
    return $data;
  }
  function get_type_pla()
  {
    $this->db->from('media_type');
    $data = $this->db->get()->result_array();
    return $data;
  }
  function get_media_pla()
  {
    $this->db->from('media');
    $this->db->join('wilayah', 'id_wilayah = wilayah_media', 'LEFT');
    $data = $this->db->get()->result_array();
    return $data;
  }
  function get_cat_pro()
  {
    $this->db->from('produksi_category');
    $data = $this->db->get()->result_array();
    return $data;
  }

  function get_detail_pp($id)
  {
    $this->db->from('project_produksi');
    $this->db->where('id_pp', $id);
    $data = $this->db->get()->row_array();
    return $data;
  }

  function get_files($id, $field)
  {
    $data = $this->get_detail($id);
    return $data[$field];
  }


  function insert($data)
  {
    $this->db->insert('project', $data);
    return $this->db->insert_id();
  }
  function insert_pro($data)
  {
    $this->db->insert('project_produksi', $data);
    return $this->db->insert_id();
  }
  function update_pro($data)
  {
    $this->db->where('id_pp', $data['id_pp']);
    $this->db->update('project_produksi', $data);
  }
  function insert_pla($data)
  {
    $this->db->insert('project_placement', $data);
    return $this->db->insert_id();
  }
  function update_pla($data)
  {
    $this->db->insert('project_placement', $data);
    return $this->db->insert_id();
  }

  function update($data)
  {
    $this->db->where('id_project', $data['id_project']);
    $this->db->update('project', $data);
  }

  function delete($id)
  {
    $this->db->where('id_project', $id);
    $this->db->delete('project');
  }
  function delete_pp($id)
  {
    $this->db->where('id_pp', $id);
    $this->db->delete('project_produksi');
  }
}
