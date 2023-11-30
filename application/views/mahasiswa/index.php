<body class="bg-primary">
  <div class="container-fluid p-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow-sm border-0">
          <div class="card-header">
            <h3 class="card-title p-4"><?= $title; ?></h3>
          </div>
          <div class="card-body">
            <div class="table-responsive px-4">
              <!-- Tombol Tambah Data -->
              <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-sm btn-primary mb-3">Tambah Data</a>

              <!-- Tombol Backup ke SQL -->
              <a href="<?= base_url('mahasiswa/backup'); ?>" class="btn btn-sm btn-success mb-3">Backup Data</a>

              <!-- Tombol Upload SQL -->
              <a href="<?= base_url('mahasiswa/upload'); ?>" class="btn btn-sm btn-warning mb-3">Upload Data</a>

              <!-- Alert Sukses/Error -->
              <?php if ($this->session->flashdata('message')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('message'); ?>.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>

              <table class="table table-bordered table-hover" id="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Lakukan Perulangan untuk mengambil Data -->
                  <?php
                  $no = 1;
                  foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $mhs->nim; ?></td>
                      <td><?= $mhs->nama; ?></td>
                      <td><?= $mhs->kelas; ?></td>
                      <!-- Tombol Edit dan Hapus -->
                      <td>
                        <a href="<?= base_url('mahasiswa/edit/' . $mhs->id); ?>" class="btn btn-warning btn-sm">
                          <i class="fas fa-edit"></i>
                          Edit
                        </a>
                        <a href="<?= base_url('mahasiswa/hapus/' . $mhs->id); ?>" class="btn btn-danger btn-sm">
                          <i class="fas fa-trash"></i>
                          Hapus
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <!-- Akhir Perulangan -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>