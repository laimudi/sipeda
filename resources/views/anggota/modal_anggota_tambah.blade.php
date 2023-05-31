<div class="modal fade" id="tambahAnggota" tabindex="-1" aria-labelledby="modalTambahAnggota" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahAnggota">Tambah Anggota</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nm_lengkap">Nama Lengkap</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nm_lengkap" id="nm_lengkap" required>
                    </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="gender">Jenis Kelamin</label>
                  <select class="form-select" name="gender" id="gender">
                      <option selected>Jenis Kelamin</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuna</option>
                  </select>
                </div>
                <div class="mb-3">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="tmp_lahir" id="tmp_lahir" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <div class="form-group">
                      <input class="form-control" type="date" id="tgl_lahir" name="tgl_lahir" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sekolah">Asal Sekolah</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="sekolah" id="sekolah" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="universitas">Universitas</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="universitas" id="universitas" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jurusan">Jurusan</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="jurusan" id="jurusan" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fakultas">Fakultas</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="fakultas" id="fakultas" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="alamat" id="alamat" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="provinsi">Provinsi</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="provinsi" id="provinsi" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="kabupaten" id="kabupaten" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kecamatan">Kecamatan/Desa</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="kecamatan" id="kecamatan" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telepon">No. Telepon/HP</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="telepon" id="telepon" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gambar">Upload Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="file" id="gambar" name="gambar" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>