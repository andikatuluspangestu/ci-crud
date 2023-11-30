<body>
  <div class="container-fluid p-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title p-4"><?= $title; ?></h3>
          </div>
          <div class="card-body">
            <div class="table-responsive p-4">

              <!-- Form Edit Data  -->
              <form action="<?= base_url('mahasiswa/update'); ?>" method="post">

                <!-- Input Grup -->
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa->nama; ?>">
                </div>
                <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa->nim; ?>">
                  <input type="hidden" name="id" value="<?= $mahasiswa->id; ?>">
                </div>
                <div class="mb-3">
                  <label for="kelas" class="form-label">Kelas</label>
                  <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $mahasiswa->kelas; ?>">
                </div>
                <!-- Akhir Input Grup -->

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-success">Update</button>
                <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-primary">Kembali</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>