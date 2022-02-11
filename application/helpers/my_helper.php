<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  function get_menu_parent()
  {
    $ci = &get_instance();
    $ci->db->from("menu");
    $ci->db->where("parent_menu", 0);
    $ci->db->order_by("index_menu", "ASC");
    $data = $ci->db->get();
    return $data->result_array();
  }
  function get_slug_parent($parent)
  {
    $ci = &get_instance();
    $ci->db->from("menu");
    $ci->db->where("id_menu", $parent);
    $datas = $ci->db->get();
    $datas = $datas->row_array();
    if($parent == 0):
      $data = "";
    else:
      $data = $datas['slug_menu'].'/';
    endif;

    return $data;
  }
  function get_menu_slug($id)
  {
    $ci = &get_instance();
    $ci->db->from("media_category");
    $ci->db->where("id_media_category", $id);
    $data = $ci->db->get();
    $data = $data->row_array();

    $ci->db->from("menu");
    $ci->db->where("nama_menu", $data['nama_media_category']);
    $datas = $ci->db->get();
    $datas = $datas->row_array();

    return $datas['slug_menu'];
  }
  function get_menu_child($parent)
  {
    $ci = &get_instance();
    $ci->db->from("menu");
    $ci->db->where("parent_menu", $parent);
    $ci->db->order_by("index_menu", "ASC");
    $data = $ci->db->get();
    return $data->result_array();
  }
  function get_menu_name($slug)
  {
    $ci = &get_instance();
    $ci->db->from("menu");
    $ci->db->where("slug_menu", $slug);
    $data = $ci->db->get();
    if($data->num_rows() > 0):
      $data = $data->row_array();
      $v = $data['nama_menu'];
    else:
      $v = "";
    endif;
    return $v;
  }
  function get_cat_id($slug)
  {
    $ci = &get_instance();
    $ci->db->from("media_category");
    $ci->db->where("nama_media_category", str_replace("_", " ", $slug));
    $data = $ci->db->get();
    if($data->num_rows() > 0):
      $data = $data->row_array();
      $v = $data['id_media_category'];
    else:
      $v = 0;
    endif;
    return $v;
  }
  function get_nama_client($id)
  {
    $ci = &get_instance();
    $ci->db->from("client");
    $ci->db->where("id_client", $id);
    $data = $ci->db->get();
    if($data->num_rows() > 0):
      $data = $data->row_array();
      $v = $data['nama_client'];
    else:
      $v = "";
    endif;
    return $v;
  }
  function get_nama_user($id)
  {
    $ci = &get_instance();
    $ci->db->from("user");
    $ci->db->where("id_user", $id);
    $data = $ci->db->get();
    if($data->num_rows() > 0):
      $data = $data->row_array();
      $v = $data['nama_user'];
    else:
      $v = "";
    endif;
    return $v;
  }
  function get_nama_penyelenggara($id)
  {
    $ci = &get_instance();
    $ci->db->from("penyelenggara");
    $ci->db->where("id_penyelenggara", $id);
    $data = $ci->db->get();
    if($data->num_rows() > 0):
      $data = $data->row_array();
      $v = $data['nama_penyelenggara'];
    else:
      $v = "";
    endif;
    return $v;
  }
  function get_nama_media($id)
  {
    $ci = &get_instance();
    $ci->db->from("media");
    $ci->db->where("id_media", $id);
    $data = $ci->db->get();
    if($data->num_rows() > 0):
      $data = $data->row_array();
      $v = $data['nama_media'];
    else:
      $v = "";
    endif;
    return $v;
  }
  function get_cat_name($slug)
  {
    $ci = &get_instance();
    $ci->db->from("media_category");
    $ci->db->where("nama_media_category", str_replace("_", " ", $slug));
    $data = $ci->db->get();
    if($data->num_rows() > 0):
      $data = $data->row_array();
      $v = $data['nama_media_category'];
    else:
      $v = "";
    endif;
    return $v;
  }

  function has_child($parent)
  {
    $ci = &get_instance();
    $ci->db->from("menu");
    $ci->db->where("parent_menu", $parent);
    $data = $ci->db->get();
    return $data->num_rows();
  }

  function get_jam_tanggal($id)
  {
    $ci = &get_instance();
    $ci->db->from("jam_vaksin");
    $ci->db->where("tanggal_jv", $id);
    $data = $ci->db->get();
    return $data->result();
  }

  function get_kode_divisi($id)
  {
    $ci = &get_instance();
    $ci->db->from('role');
    $ci->db->where('id_role', $id);
    $v = $ci->db->get()->row_array();
    $data = strtoupper(substr($v['nama_role'], 0, 3));
    return $data;

  }

  function get_field($table, $key_name, $key, $field)
  {
    $ci = &get_instance();
    $ci->db->select($field);
    $ci->db->from($table);
    $ci->db->where($key_name, $key);
    $data = $ci->db->get();
    // print_r($ci->db->last_query());die;
    $data = $data->row_array();
    return $data[$field];
  }

  function get_produksi($parent)
  {
    $ci = &get_instance();
    $ci->db->from("project_produksi");
    $ci->db->where("parent_pp", $parent);
    $data = $ci->db->get();
    // print_r($ci->db->last_query());die;
    $data = $data->result_array();
    return $data;
  }
  function get_placement($parent)
  {
    $ci = &get_instance();
    $ci->db->from("project_placement");
    $ci->db->where("parent_pm", $parent);
    $data = $ci->db->get();
    // print_r($ci->db->last_query());die;
    $data = $data->result_array();
    return $data;
  }

  function get_images_laporan($id)
  {
    $ci = &get_instance();
    $ci->db->from("app_laporan_photo");
    $ci->db->where("id_laporan_photo", $id);
    $data = $ci->db->get();
    // print_r($data->num_rows());die;
    if($data->num_rows() > 0):
      $datas = $data->result_array();
    else:
      $datas[0] = array(
        'id_photo_ai' => '',
        'id_laporan_photo' => '',
        'caption_laporan_photo' => '',
        'source_laporan_photo' => '',
        'user_laporan_photo' => ''
      );
    endif;
    return $datas;
  }
  function get_tim_laporan($id)
  {
    $ci = &get_instance();
    $ci->db->from("app_laporan_tim");
    $ci->db->join("app_user", "id_user = user_laporan_tim");
    $ci->db->join("app_laporan", "id_laporan = id_laporan_tim");
    $ci->db->join("app_role", "id_role = role_user");
    $ci->db->where("id_laporan_tim", $id);
    $ci->db->order_by("id_role", "ASC");
    $data = $ci->db->get();
    // print_r($data->num_rows());die;
    $datas = $data->result_array();
    return $datas;
  }
  function get_material_laporan($id)
  {
    $ci = &get_instance();
    $ci->db->from("app_laporan_material");
    $ci->db->join("app_material", "id_material = material_laporan_material");
    $ci->db->join("app_laporan", "id_laporan = id_laporan_material");
    $ci->db->where("id_laporan_material", $id);
    $data = $ci->db->get();
    // print_r($data->num_rows());die;
    $datas = $data->result_array();
    return $datas;
  }


  function send_email($to, $subject, $message)
  {
      // $to = 'stribez@gmail.com';
      // $cc = '130384@yahoo.com';
      // $subject = 'COBA';
      // $attach = false;
      // $message = "TEST";

      // $ci = get_instance();
      // $ci->load->library('email');
      // $config['protocol'] = "mail";
      // $config['smtp_host'] = "mail.satriacorp.id";
      // $config['smtp_port'] = "465";
      // $config['smtp_user'] = "no-reply@satriacorp.id";
      // $config['smtp_pass'] = "100%Id/En";
      // $config['mailtype'] = 'html';
      // $config['charset']  = 'utf-8';
      // $config['newline']  = "\r\n";
      // $config['wordwrap'] = TRUE;
      // $ci->email->initialize($config);
      // $ci->email->from('no-reply@satriacorp.id', "Vaksin BRI");
      // $ci->email->to($to);
      // $ci->email->cc('manager.stribez@gmail.com');
      // $ci->email->subject($subject);
      // $ci->email->message($message);
      // $ci->email->send();

      // print_r($ci->email->print_debugger());die;
  }


  function send_notification($title, $desc, $user, $type, $type_id)
  {
    $ci=& get_instance();
    $ci->load->database(); 

    $post = array(
      'notification_title'        =>  $title,
      'notification_description'  =>  $desc,
      'notification_user'         =>  $user,
      'notification_type'         =>  $type,
      'notification_type_id'      =>  $type_id
    );
    
    $ci->db->insert('notification', $post);
    return $ci->db->insert_id();
  }

  function no_reg($total)
	{
		$sub1 = substr($total,-3);
	  $sub2 = substr($total,-2);
	  $sub3 = substr($total,-1);

	  $total1 =  random_string('numeric', 3);
	  $total2 =  random_string('numeric', 2);
	  $total3 =  random_string('numeric', 1);

	  if($sub1==0){
	    $total =  $total + $total1;
	  } else if($sub2 == 0){
	    $total = $total + $total2; 
	  } else if($sub3 == 0){
	    $total = $total + $total3;
	  }else{
	    $total = $total;
    }
    $data = array('price' => $total, 'code' => substr($total, -3, 3));
    return $data;
  }
  
  function encrypt_uri($uri)
  {
    $CI =&get_instance();
    $CI->load->library('encryption'); // load library 
    return strtr($CI->encryption->encrypt($uri), '+=/', '.-~');
  }
  function decrypt_uri($uri)
  {
    $CI =&get_instance();
    $CI->load->library('encryption'); // load library 
    return $CI->encryption->decrypt(strtr($uri, '.-~', '+=/'));
  }

  function upload_files($path, $slug)
  {
    $CI =&get_instance();
    $CI->load->library(['upload', 'image_lib']); // load library 

    $img_name = microtime(true)*10000;
    
    $data = array();
    $config['upload_path']          = './uploads/tmp/';
    $config['file_name']            = $slug.'_'.$img_name;
    $config['allowed_types']        = '*';
    $config['max_size']             = 0;

    $CI->upload->initialize($config);
    
    if ( ! $CI->upload->do_upload('file'))
    {
        $error = array('error' => $CI->upload->display_errors());
    }
    else
    {
        $data = array('upload_data' => $CI->upload->data());
    }
    // print_r($data);die;
    $config1['image_library'] = 'gd2';
    $config1['source_image'] = $data['upload_data']['full_path'];
    $config1['new_image'] = './uploads/'.$path.'/';
    $config1['create_thumb'] = TRUE;
    $config1['thumb_marker']  = '';
    $config1['maintain_ratio'] = TRUE;
    $config1['width']         = 700;
    $config1['height']       = 700;
    
    $CI->image_lib->initialize($config1);
    
    $CI->image_lib->resize();  
    $CI->image_lib->clear();
    if (!$CI->image_lib->resize()) {
      $CI->handle_error($CI->image_lib->display_errors());
    }
    else {
        ob_end_clean();
    }
    
    unlink('./uploads/tmp/'.$data['upload_data']['file_name']);

    $new_name = $data['upload_data']['file_name'];
    return $new_name;
  }

  function upload_pdf($slug, $inputname)
  {
    $CI =&get_instance();
    $CI->load->library(['upload', 'image_lib']); // load library 

    $img_name = microtime(true)*10000;

    $data = array();
    $config['upload_path']          = './uploads/files/';
    $config['file_name']            = $slug.'_'.$img_name;
    $config['allowed_types']        = '*';
    $config['max_size']             = 0;

    $CI->upload->initialize($config);
    
    if ( ! $CI->upload->do_upload($inputname))
    {
        $error = array('error' => $CI->upload->display_errors());
    }
    else
    {
        $data = array('upload_data' => $CI->upload->data());
    }
    // print_r($data);die;

    $new_name = $data['upload_data']['file_name'];
    return $new_name;
  }


  function del_files($images, $path)
  { 
    unlink('./uploads/'.$path.'/'.$images);
  }

  function check_admin()
  {
    $CI =&get_instance();
    $CI->load->library('session'); // load library 
    if ($CI->session->userdata('userlogin')['user_group'] != 1) redirect (base_url().'forbiden');
  }

  function check_register($data)
  {
    $CI =&get_instance();
    $CI->load->library('session'); // load library 
    if ($CI->session->userdata('userlogin')['user_id'] != $data->event_user_user) redirect (base_url().'forbiden');
    if ($data->event_user_active > 0) redirect (base_url().'event/'.$data->event_slug);
  }

  function check_login()
  {
    $CI =&get_instance();
    $CI->load->library('session'); // load library 
    if (!isset($CI->session->userdata('userlogin')['user_id'])) redirect (base_url());
  }

  function get_user_themes($id)
  {
    $ci = &get_instance();
    $ci->db->from("user");
    $ci->db->where("id_user", $id);
    $data = $ci->db->get();
    // print_r($data->num_rows());die;
    $data = $data->row_array();
    $data = $data['status_user'];
    $datas = array();
    if($data == 1){
      $datas['theme'] = 'light';
      $datas['btn'] = '';
    }else{
      $datas['theme'] = 'dark';
      $datas['btn'] = 'dark-mode-switcher__toggle--active';
    }
    // print_r($data);die;
    return $datas;
  }

  function seo_title($s)
  {
    $c = array(' ');
    $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–');
    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    $s = strtolower(str_replace($c, '_', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
  }

  function tgl_indo($tanggal){
    if ($tanggal == '0000-00-00' || $tanggal == '' || $tanggal == '0000-00-00 00:00:00') return ' '; 
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return (string)((int)($pecahkan[2])) . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }

  function tgl_indo_short($tanggal){
    if ($tanggal == '0000-00-00' || $tanggal == '') return ' '; 
    $bulan = array (
        1 =>   'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agu',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return (string)((int)($pecahkan[2])) . ' ' . $bulan[ (int)$pecahkan[1] ] ;
  }
  function tgl_indo2($tanggal){
    if ($tanggal == '0000-00-00' || $tanggal == '') return ' '; 
    $bulan = array (
        1 =>   'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agu',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return (string)((int)($pecahkan[2])) . ' ' . $bulan[ (int)$pecahkan[1] ]. ' ' .substr($pecahkan[0],2);
  }
  
  function hari_indo($tanggal){
    if ($tanggal == '0000-00-00' || $tanggal == '') return ''; 
    $hari = array (
        1    =>  'Senin',
	  'Selasa',
	  'Rabu',
	  'Kamis',
	  'Jumat',
	  'Sabtu',
	  'Minggu'
    );
    
    $day = strftime("%u",strtotime($tanggal));
    
//    print_r();die;
 
    return $hari[ (int) $day ];
  }
  
  function tgl_plus($tanggal, $add){
    if ($tanggal == '0000-00-00' || $tanggal == '') return ''; 
    $date = new DateTime($tanggal);

    $date->modify($add.' day');
    $d = $date->format('Y-m-d') . "\n";
 
    return $d;
  }

  
  function angka($number) {
    $number = explode('.',$number);
    $number = $number[0];
 
    $hyphen      = ' ';
    $conjunction = ' ';
    $separator   = ' ';
    $negative    = 'minus ';
    $decimal     = ' koma ';
    $dictionary  = array(
        0                   => 'nol',
        1                   => 'satu',
        2                   => 'dua',
        3                   => 'tiga',
        4                   => 'empat',
        5                   => 'lima',
        6                   => 'enam',
        7                   => 'tujuh',
        8                   => 'delapan',
        9                   => 'sembilan',
        10                  => 'sepuluh',
        11                  => 'sebelas',
        12                  => 'dua belas',
        13                  => 'tiga belas',
        14                  => 'empat belas',
        15                  => 'lima belas',
        16                  => 'enam belas',
        17                  => 'tujuh belas',
        18                  => 'delapan belas',
        19                  => 'sembilan belas',
        20                  => 'dua puluh',
        30                  => 'tiga puluh',
        40                  => 'empat puluh',
        50                  => 'lima puluh',
        60                  => 'enam puluh',
        70                  => 'tujuh puluh',
        80                  => 'delapan puluh',
        90                  => 'sembilan puluh',
        100                 => 'ratus',
        1000                => 'ribu',
        100000              => 'ratus ribu',
        1000000             => 'juta',
        1000000000          => 'miliar',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );
   
    if (!is_numeric($number)) {
        return false;
    }
   
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'angka only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    
    
    
    if ($number < 0) {
        return $negative . angka(abs($number));
    }
   
    $string = $fraction = null;
   
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
   
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            
            if ($string == 'satu ratus') {
                $string = 'seratus';
            }
            if ($remainder) {
                $string .= $conjunction . angka($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = angka($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= angka($remainder);
            }
            break;
    }
   
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
    if ($string == 'satu ribu') {
        $string = 'seribu';
    }
    if ($string == 'satu ratus') {
        $string = 'seratus';
    }
    if ($string == 'satu ratus ribu') {
        $string = 'seratus ribu';
    }
    return $string;
  }
  
  function dateOnly($tanggal)
  {     
      if ($tanggal == '0000-00-00') return ''; 
      $date = new DateTime($tanggal);

      $d = $date->format('Y-m-d');
      $data = explode("-", $d);
      
      $d = $data[2];
      
      return (int) $d;
  }
  function monthOnly($tanggal)
  {
      if ($tanggal == '0000-00-00') return ''; 
      $data = explode("-", $tanggal);
      $m = $data[1];
      return (int) $m;
  }
  function tgl_datepicker($tanggal)
  {
      $data = explode("-", $tanggal);
      return $data[2].'/'.$data[1].'/'.$data[0];
  }
  function yearOnly($tanggal)
  {
    // print_r(isset($tanggal));die;
      if ($tanggal == '0000-00-00') return ''; 
      if ($tanggal == null) return '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; 
      $data = explode("-", $tanggal);
      $m = $data[0];
      return $m;
  }
  
  function monthOnly_indo($tanggal){
    if ($tanggal == '0000-00-00') return ''; 
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $bulan[ (int)$pecahkan[1] ];
  }
  
  
  function monthRoman($tanggal)
  {
    // print_r($tanggal);die;
      if ($tanggal == '0000-00-00') return ''; 
      if ($tanggal == null) return '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; 
      $date = explode("-", $tanggal);
      $data = $date[1];
      if ($data == '01'):
	  $result = 'I';
      elseif ($data == '02'):
	  $result = 'II';
      elseif ($data == '03'):
	  $result = 'III';
      elseif ($data == '04'):
	  $result = 'IV';
      elseif ($data == '05'):
	  $result = 'V';
      elseif ($data == '06'):
	  $result = 'VI';
      elseif ($data == '07'):
	  $result = 'VII';
      elseif ($data == '08'):
	  $result = 'VIII';
      elseif ($data == '09'):
	  $result = 'IX';
      elseif ($data == '10'):
	  $result = 'X';
      elseif ($data == '11'):
	  $result = 'XI';
      else :
	  $result = 'XII';
      endif;
      return $result;
  }
