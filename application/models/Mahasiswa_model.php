<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model{

  // Deklarasi variable
  // menampung nama tabel dan primary key
  private $table = 'mahasiswa';
  private $pk    = 'id';

  // Method untuk menampilkan semua data
  function get_all()
  {
    // Ambil data dari database secara descending
    $this->db->order_by($this->pk, 'DESC');

    // Kirim data ke controller
    return $this->db->get($this->table);
  }

  // Method untuk menampilkan data berdasarkan id
  function get_by_id($id)
  {
    // Ambil data dari database berdasarkan id
    $this->db->where($this->pk, $id);

    // Kirim data ke controller
    return $this->db->get($this->table);
  }

  // Method untuk menambah data
  function insert($data)
  {
    // Tambah data ke database
    return $this->db->insert($this->table, $data);
  }


  /**
   * Retrieve data from the database based on the given ID.
   *
   * @param int $id The ID of the data to be retrieved.
   * @return object|null The retrieved data as an object, or null if no data found.
   */
  function edit($id)
  {
    // Ambil data dari database berdasarkan id
    $this->db->where($this->pk, $id);

    // Kirim data ke controller dengan mengubah bentuknya menjadi object
    return $this->db->get($this->table)->row();
  }

  // Method untuk mengubah data
  function update($id, $data)
  {
    // Ubah data di database berdasarkan id
    $this->db->where($this->pk, $id);

    // Kirim data ke controller
    return $this->db->update($this->table, $data);
  }

  // Method untuk menghapus data
  function delete($id)
  {
    // Hapus data dari database berdasarkan id
    $this->db->where($this->pk, $id);

    // Kirim data ke controller
    return $this->db->delete($this->table);
  }

}