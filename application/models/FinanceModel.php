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
  function get_bb($wilayah = false, $mulai = false, $selesai = false)
  {
    $this->db->from('buku_besar');
    if ($wilayah > 0) :
      if($wilayah[1] == 0 && $wilayah[2] == 0 && $wilayah[3] == 0):
        $this->db->like('coa_bb', $wilayah[0], 'after');
      else:
        $this->db->where('coa_bb', $wilayah);
      endif;
    endif;

    $this->db->where('tanggal_bb >=', $mulai);
    $this->db->where('tanggal_bb <=', $selesai);

    return $this->db->get();
    // print_r($this->db->last_query());die;
  }
  function get_gl($akun = false, $mulai = false, $selesai = false)
  {
    $this->db->from('buku_besar');

    if($akun[1] == 0 && $akun[2] == 0 && $akun[3] == 0):
      $this->db->like('coa_bb', $akun[0], 'after');
    else:
      $this->db->where('coa_bb', $akun);
    endif;

    $this->db->where('tanggal_bb >=', $mulai);
    $this->db->where('tanggal_bb <=', $selesai);

    return $this->db->get();
    // print_r($this->db->last_query());die;
  }


  function get_hp($hp = false, $client= false, $media = false, $vendor = false, $mulai = false, $selesai = false)
  {
    $this->db->from('hutang_piutang');
    if ($hp == 1) :
      $this->db->where('piutang_hp', 0);
      $this->db->where('hutang_hp >', 0);
    elseif($hp == 2):
      $this->db->where('piutang_hp >', 0);
      $this->db->where('hutang_hp', 0);
    else:
      $this->db->where('piutang_hp >=', 0);
      $this->db->where('hutang_hp >=', 0);
    endif;

    $this->db->where('created_hp >=', $mulai. " 00:00:00");
    $this->db->where('created_hp <=', $selesai. " 00:00:00");

    $query = $this->db->get();
    // print_r($this->db->last_query());die;
    $data[] = array();

    foreach ($query->result_array() as $kk => $vv):
      foreach($vv as $k => $v):
        if($k == 'type_hp'):
          $data[$kk]['detail_hp'] = $this->get_nama_pihak_ketiga($v, $vv['parent_hp']);
        endif;
        $data[$kk][$k] = $v;
      endforeach;
    endforeach;

    return $data;
  }

  function get_nama_pihak_ketiga($type, $id)
  {
    if($type == 1):
      $this->db->from('project_produksi');
      $this->db->join('project', 'parent_pp = id_project');
      $this->db->join('client', 'id_client = client_project', 'LEFT');
      $this->db->join('vendor', 'vendor_pp = id_vendor');
      $this->db->where('id_pp', $id);
    elseif($type == 2):
      $this->db->from('project_placement');
      $this->db->join('project', 'parent_pm = id_project');
      $this->db->join('client', 'id_client = client_project', 'LEFT');
      $this->db->join('media', 'id_media = wilayah_pm', 'LEFT');
      $this->db->where('id_pm', $id);
    else:
      $this->db->from('project');
      $this->db->join('client', 'id_client = client_project', 'LEFT');
      $this->db->where('id_project', $id);
    endif;

    return $this->db->get()->row_array();
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
  function get_non_area_coa()
  {
    $this->db->from('coa_akun');
    $this->db->where('area_coa <', 1);
    return $this->db->get();
  }
  function get_coa($parent = false)
  {
    $this->db->from('coa_akun');
    if ($parent) :
      $this->db->like('no_coa', $parent[0], 'after');
      $this->db->not_like('no_coa', 0, 'before');
    endif;
    return $this->db->get();
  }
  function get_cat_coa()
  {
    $this->db->from('coa_akun');
    $this->db->like('no_coa', "000", 'before');
    return $this->db->get();
  }

  function get_user()
  {
    $this->db->from('user');
    // $this->db->join('client', 'id_client = client_project', 'LEFT');
    return $this->db->get();
  }

  function insert_pc($data)
  {
    // print_r($data);die;
    $this->db->insert('petty_cash', $data);
    return $this->db->insert_id();
  }

  function insert_bb($data)
  {
    // print_r($data);die;
    $this->db->insert('buku_besar', $data);
    return $this->db->insert_id();
  }

  function insert_piutang($data)
  {
    // Cek piutang eksis
    $this->db->from("piutang");
    $this->db->where("project_piutang", $data['project_piutang']);
    $id = $this->db->get();
    $id = $id->row_array();
    $id = $id['id_piutang'];

    if($id > 0):
      $this->db->where('id_piutang', $id);
      $this->db->update('piutang', $data);
    else:
      $this->db->insert('piutang', $data);
    endif;
  }

  function insert_hp($data)
  {
    // Cek utang eksis
    $this->db->insert('hutang_piutang', $data);
  }
  function update_hp($data, $id)
  {
    $this->db->where('id_hp', $id);
    $this->db->update('hutang_piutang', $data);
  }


  function get_cat_assets()
  {
    $this->db->from('assets_category');
    return $this->db->get();
  }

  function get_assets($cat = false, $id = false)
  {
    $this->db->from('assets');
    $this->db->join('assets_category', 'id_ac = kategori_as', 'LEFT');
    if($cat) $this->db->where('kategori_as', $cat);
    if($id) $this->db->where('id_as', $id);
    return $this->db->get();
  }
  function insert_aset($data)
  {
    // Cek utang eksis
    $this->db->insert('assets', $data);
  }
  
  function get_stock($id = false)
  {
    $this->db->select('*, SUM(detail_stock.in_ds) as in_stock, SUM(detail_stock.out_ds) as out_stock');
    $this->db->from('stock');
    $this->db->join('detail_stock', 'item_ds = id_stock', 'LEFT');
    $this->db->group_by('id_stock');
    if($id) $this->db->where('id_stock', $id);
    return $this->db->get();
    // print_r($this->db->last_query());die;
  }
  function get_stock_detail($id = false)
  {
    // $this->db->select('*, SUM(detail_stock.in_ds) as in_stock, SUM(detail_stock.out_ds) as out_stock');
    $this->db->from('detail_stock');
    $this->db->join('stock', 'item_ds = id_stock', 'LEFT');
    $this->db->join('user', 'user_ds = id_user', 'LEFT');
    $this->db->join('role', 'role_user = id_role', 'LEFT');
    // $this->db->group_by('id_stock');
    if($id) $this->db->where('id_stock', $id);
    return $this->db->get();
  }
  function insert_stock($data)
  {
    // Cek utang eksis
    $this->db->insert('detail_stock', $data);
  }
  


}
