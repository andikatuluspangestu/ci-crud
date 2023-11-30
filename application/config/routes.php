<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Router Utama
$route['default_controller'] = 'mahasiswa';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Route untuk Mahasiswa
$route['mahasiswa']               = 'mahasiswa/index';
$route['mahasiswa/tambah']        = 'mahasiswa/add';
$route['edit/(:any)']             = 'mahasiswa/edit/$1';
$route['mahasiswa/hapus/(:any)']  = 'mahasiswa/delete/$1';
$route['mahasiswa/backup']        = 'mahasiswa/exportsql';
$route['mahasiswa/upload']        = 'mahasiswa/upload';

?>