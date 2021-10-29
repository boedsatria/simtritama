<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

  function get_user($id = false)
  {
    $this->db->from('user');
    $this->db->join('role', 'role_user = id_role');
    if ($id) $this->db->where('id_user', $id);
    return $this->db->get();
  }
  function get_role($id = false)
  {
    $this->db->from('role');
    if ($id) $this->db->where('id_role', $id);
    return $this->db->get();
  }
  function insert_user($data)
  {
    $this->db->insert('user', $data);
    return $this->db->insert_id();
  }

  function update_user($data)
  {
    $this->db->where('id_user', $data['id_user']);
    $this->db->update('user', $data);
  }

  function delete_user($id)
  {
    $this->db->where('id_user', $id);
    $this->db->delete('user');
  }















  function get_laporan_all($limit = false, $offset =  false, $thn = false, $bulan = false, $dibuat = false, $selesai = false, $revisi = false, $id = false)
  {
    // $offset= 0;
    $join = array_filter(array($dibuat, $selesai, $revisi));
    $status = join("','", $join);
    $status = str_replace("'", "", $status);

    $this->db->from('app_laporan');
    $this->db->join('app_laporan_jenis', 'id_laporan_jenis = jenis_laporan');
    $this->db->join('app_kelurahan', 'id_kelurahan = wilayah_laporan');
    $this->db->join('app_kecamatan', 'id_kecamatan = parent_kelurahan');
    $this->db->join('app_status', 'id_status = status_laporan');
    $this->db->join('app_user', 'id_user = user_laporan');
    if ($id) $this->db->where('user_laporan', $id);
    if ($limit) $this->db->limit($limit, $offset);
    if ($bulan) $this->db->where('month(dibuat_laporan)', $bulan);
    if ($thn) $this->db->where('year(dibuat_laporan)', $thn);
    if ($dibuat || $selesai || $revisi) $this->db->where('status_laporan IN (' . $status . ')', NULL, false);
    $this->db->order_by('id_laporan', 'DESC');
    // $this->db->get();
    // print_r($offset);die;
    // print_r($this->db->last_query());die;
    return $this->db->get();
  }
  function get_laporan_filtered($thn, $bulan, $dibuat, $selesai, $revisi, $id = false)
  {
    // $offset= 0;
    $join = array_filter(array($dibuat, $selesai, $revisi));
    $status = join(",", $join);
    $status = str_replace("'", "", $status);

    $this->db->from('app_laporan');
    if ($id) $this->db->where('user_laporan', $id);
    if ($bulan) $this->db->where('month(dibuat_laporan)', $bulan);
    if ($thn) $this->db->where('year(dibuat_laporan)', $thn);
    if ($dibuat || $selesai || $revisi) $this->db->where('status_laporan IN (' . $status . ')', NULL, false);
    // $this->db->get();
    // print_r($this->db->last_query());die;
    return $this->db->get();
  }
  function get_laporan_detail($id)
  {
    $this->db->from('app_laporan');
    $this->db->join('app_laporan_jenis', 'id_laporan_jenis = jenis_laporan');
    $this->db->join('app_kelurahan', 'id_kelurahan = wilayah_laporan');
    $this->db->join('app_kecamatan', 'id_kecamatan = parent_kelurahan');
    $this->db->join('app_status', 'id_status = status_laporan');
    $this->db->join('app_user', 'id_user = user_laporan');
    $this->db->where('id_laporan', $id);
    return $this->db->get();
  }

  function get_jumlah_laporan()
  {
    $this->db->select('count(id_laporan) as jumlah');
    $this->db->from('app_laporan');
    $data = $this->db->get();
    return $data;
  }
  function get_jumlah_terbaru()
  {
    $this->db->select('count(id_laporan) as jumlah');
    $this->db->from('app_laporan');
    $this->db->where('status_laporan', 1);
    $data = $this->db->get();
    return $data;
  }
  function get_jumlah_tim()
  {
    $this->db->select('count(id_user) as jumlah');
    $this->db->from('app_user');
    $this->db->where('role_user', 3);
    $data = $this->db->get();
    return $data;
  }
  function get_jumlah_selesai()
  {
    $this->db->select('count(id_laporan) as jumlah');
    $this->db->from('app_laporan');
    $this->db->where('status_laporan', 2);
    $data = $this->db->get();
    return $data;
  }


  function check_register($v)
  {
    $this->db->where('email_user', $v);
    $query = $this->db->get('app_user');
    if ($query->num_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  function get_role_all()
  {
    $data = $this->db->from('app_role')->get();
    return $data;
  }



  function get_login_nama($nama, $email)
  {
    $data = $this->db->from('user')
      ->where('email_user', $email)
      ->get()->row();

    if ($data->nama_user == $nama) {
      return $data;
    } else {
      return 0;
    }
  }


  function get_kecamatan()
  {
    $this->db->from('app_kecamatan');
    return $this->db->get();
  }
  function get_kelurahan_by_kecamatan($id)
  {
    $this->db->from('app_kelurahan');
    $this->db->where('parent_kelurahan', $id);
    return $this->db->get();
  }

  function insert_laporan($data)
  {
    $this->db->insert('app_laporan', $data);
    return $this->db->insert_id();
  }
  function insert_laporan_photo($data)
  {
    $this->db->insert('app_laporan_photo', $data);
    // return $this->db->insert_id();
  }
  function update_laporan_photo($data)
  {
    $this->db->where('id_photo_ai', $data['id_photo_ai']);
    $this->db->update('app_laporan_photo', $data);
  }

  function delete_photo_laporan($id)
  {
    $this->db->where('id_photo_ai', $id);
    $this->db->delete('app_laporan_photo');
  }
  function update_laporan($data)
  {
    $this->db->where('id_laporan', $data['id_laporan']);
    $this->db->update('app_laporan', $data);
    return $this->db->affected_rows();
  }


  function get_status()
  {
    $this->db->from('app_status');
    return $this->db->get();
  }
  function get_material()
  {
    $this->db->from('app_material');
    return $this->db->get();
  }
  function update_material($data)
  {
    $this->db->where('id_material', $data['id_material']);
    $this->db->update('app_material', $data);
  }
  function delete_material($id)
  {
    $this->db->where('id_material', $id);
    $this->db->delete('app_material');
  }
  function get_material_detail($id)
  {
    $this->db->from('app_material');
    $this->db->where('id_material', $id);
    return $this->db->get();
  }
  function get_jenis_laporan()
  {
    $this->db->from('app_laporan_jenis');
    return $this->db->get();
  }
  function get_keterangan()
  {
    $this->db->from('app_keterangan');
    return $this->db->get();
  }
  function get_user_all()
  {
    $this->db->from('app_user');
    $this->db->join('app_role', 'id_role=role_user');
    // $this->db->where('role_user', 3);
    return $this->db->get();
  }
  function get_tim_all()
  {
    $this->db->from('app_user');
    $this->db->join('app_role', 'id_role=role_user');
    $this->db->where('role_user', 3);
    return $this->db->get();
  }
  function get_tim_detail($id)
  {
    $this->db->from('app_user');
    $this->db->join('app_role', 'id_role=role_user');
    $this->db->where('id_user', $id);
    return $this->db->get();
  }
  function get_tim_not_in_list($id)
  {
    $data = $this->get_tim_array_in_list($id);
    // print_r($data);die;
    $this->db->from('app_user');
    $this->db->where('role_user', 3);
    if ($data != "") $this->db->where('id_user NOT IN (' . $data . ')', NULL, false);
    return $this->db->get();
  }
  function get_kordinator_not_in_list($id)
  {
    $data = $this->get_tim_array_in_list($id);
    // print_r($data);die;
    $this->db->from('app_user');
    $this->db->where('role_user', 2);
    if ($data != "") $this->db->where('id_user NOT IN (' . $data . ')', NULL, false);
    return $this->db->get();
  }

  function get_tim_array_in_list($id)
  {
    $this->db->select("user_laporan_tim");
    $this->db->from("app_laporan_tim");
    $this->db->where("id_laporan_tim", $id);
    $data = $this->db->get();

    $set = array();
    foreach ($data->result_array() as $v) :
      array_push($set, $v['user_laporan_tim']);
    endforeach;
    $set = json_encode($set);
    $new_set = str_replace('"', '', $set);
    $new_set = str_replace('[', '', $new_set);
    $new_set = str_replace(']', '', $new_set);

    return $new_set;
  }

  function insert_tim_laporan($data)
  {
    $this->db->insert_batch('app_laporan_tim', $data);
    return $this->db->affected_rows();
  }
  function insert_laporan_jenis($data)
  {
    $this->db->insert('app_laporan_jenis', $data);
    return $this->db->affected_rows();
  }

  function delete_tim_laporan($data)
  {
    $this->db->where('id_tim_ai', $data);
    $this->db->delete('app_laporan_tim');
    return $this->db->affected_rows();
  }

  function insert_material($data)
  {
    $this->db->insert('app_material', $data);
    return $this->db->affected_rows();
  }
  function insert_material_laporan($data)
  {
    $this->db->insert('app_laporan_material', $data);
    return $this->db->affected_rows();
  }

  function delete_material_laporan($data, $id)
  {
    $this->db->where('id_laporan_material', $id);
    $this->db->where('material_laporan_material', $data);
    $this->db->delete('app_laporan_material');
    return $this->db->affected_rows();
  }
}
