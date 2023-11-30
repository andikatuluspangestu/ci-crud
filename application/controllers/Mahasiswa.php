<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    // Memanggil Model Mahasiswa
    $this->load->model('Mahasiswa_model');

  }

  // Method Menampilkan Data
  function index()
  {

    // Judul
    $data['title'] = 'Data Mahasiswa';

    // Mengambil data dari model
    $data['mahasiswa'] =
    $this->Mahasiswa_model->get_all()->result();

    // Mengirim data ke view
    $this->load->view('mahasiswa/template/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('mahasiswa/template/footer');
  }

  
  // Method Menampilkan Form Tambah Data
  function add()
  {
    // Judul
    $data['title'] = 'Tambah Data Mahasiswa';

    // Mengirim data ke view
    $this->load->view('mahasiswa/template/header', $data);
    $this->load->view('mahasiswa/add', $data);
    $this->load->view('mahasiswa/template/footer');
  }

  // Method Menambahkan Data
  function insert()
  {
    // Mengambil data dari form
    $data = [
      'nama'  => $this->input->post('nama'),
      'nim'   => $this->input->post('nim'),
      'kelas' => $this->input->post('kelas'),
    ];

    // Cek Validasi Tipe Data
    if ( ! is_numeric($data['nim'])) {
      $this->session->set_flashdata('message', 'NIM harus berupa angka');
      redirect('mahasiswa/tambah');
    } 

    // Menambah data ke database
    $this->Mahasiswa_model->insert($data);

    // Set Flashdata untuk menampilkan pesan berhasil dan mengembalikan ke halaman awal
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
    } else {
      $this->session->set_flashdata('message', 'Data gagal ditambahkan');
    }

    redirect('mahasiswa');
  }

  // Method Menampilkan Form Edit Data
  function edit()
  {
    // Judul
    $data['title'] = 'Edit Data Mahasiswa';

    // Mengambil data dari model
    $data['mahasiswa'] = $this->Mahasiswa_model->edit($this->uri->segment(3));

    // Mengirim data ke view
    $this->load->view('mahasiswa/template/header', $data);
    $this->load->view('mahasiswa/edit', $data);
    $this->load->view('mahasiswa/template/footer');
  }

  // Method Mengubah Data
  function update()
  {
    // Mengambil data dari form
    $data = [
      'id'    => $this->input->post('id'),
      'nama'  => $this->input->post('nama'),
      'nim'   => $this->input->post('nim'),
      'kelas' => $this->input->post('kelas'),
    ];

    // Mengambil id dari form
    $id = $this->input->post('id');

    // Mengubah data di database
    $this->Mahasiswa_model->update($id, $data);

    // Set Flashdata untuk menampilkan pesan berhasil dan mengembalikan ke halaman awal
    $this->session->set_flashdata('message', 'Data berhasil diubah');
    redirect('mahasiswa');

  }

  // Method Menghapus Data
  function delete()
  {
    // Menghapus data dari database
    $this->Mahasiswa_model->delete($this->uri->segment(3));

    // Mengembalikan ke halaman awal
    redirect('mahasiswa');
  }

  // Export ke File SQL
  function exportsql()
  {
    // Load Helper
    $this->load->helper('file');

    // Mengambil data dari model
    $data['mahasiswa'] = $this->Mahasiswa_model->get_all()->result();

    // Buat string SQL
    $sql_content = '';
    foreach ($data['mahasiswa'] as $mhs) {
      $sql_content .= "INSERT INTO mahasiswa VALUES ('$mhs->id', '$mhs->nama', '$mhs->nim', '$mhs->kelas');\n";
    }
  
    // Simpan string SQL ke file
    $file_path = FCPATH . 'assets/sql/mahasiswa.sql';
    write_file($file_path, $sql_content);

    // Set Flashdata untuk menampilkan pesan berhasil dan mengembalikan ke halaman awal
    $this->session->set_flashdata('message', "Ekspor ke SQL berhasil. File disimpan di: " . $file_path);

    redirect('mahasiswa');
  }

}