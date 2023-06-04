<div class="modal fade" id="tambahPendaftaran" tabindex="-1" aria-labelledby="modalTambahPendaftaran" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahPendaftaran">Tambah Pendaftaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name">Nama Lengkap</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="name" id="name" value="{{ $anggota->name }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="{{ $anggota->gender }}">{{ $anggota->gender }}</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $anggota->tmp_lahir }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <div class="form-group">
                      <input class="form-control" type="date" id="tgl_lahir" name="tgl_lahir" value="{{ $anggota->tgl_lahir }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="agama">Agama</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="agama" id="agama" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $anggota->alamat }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="penyakit">Riwayat Penyakit</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="penyakit" id="penyakit" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telepon_ortu">No. Telepon Ortu</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="telepon_ortu" id="telepon_ortu" required>
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