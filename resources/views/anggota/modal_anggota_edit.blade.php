<div class="modal fade" id="editAnggota" tabindex="-1" aria-labelledby="modalEditAnggota" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditAnggota">Edit Anggota</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('anggota.update', $anggotas->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nm_lengkap">Nama Lengkap</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nm_lengkap" id="nm_lengkap" value="{{ $anggotas->nm_lengkap }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="{{ $anggotas->gender }}">{{ $anggotas->gender }}</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $anggotas->tmp_lahir }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <div class="form-group">
                      <input class="form-control" type="date" id="tgl_lahir" name="tgl_lahir" value="{{ $anggotas->tgl_lahir }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sekolah">Asal Sekolah</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="sekolah" id="sekolah" value="{{ $anggotas->sekolah }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="universitas">Universitas</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="universitas" id="universitas" value="{{ $anggotas->universitas }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jurusan">Jurusan</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="jurusan" id="jurusan" value="{{ $anggotas->jurusan }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fakultas">Fakultas</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="fakultas" id="fakultas" value="{{ $anggotas->fakultas }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $anggotas->alamat }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="provinsi">Provinsi</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="provinsi" id="provinsi" value="{{ $anggotas->provinsi }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="kabupaten" id="kabupaten" value="{{ $anggotas->kabupaten }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kecamatan">Kecamatan/Desa</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="{{ $anggotas->kecamatan }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telepon">No. Telepon/HP</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="telepon" id="telepon" value="{{ $anggotas->telepon }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gambar">Upload Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="file" id="gambar" name="gambar" value="{{ $anggotas->gambar }}">
                      <img src="{{ asset('storage/mahasiswa-gambar/'.$anggotas->gambar) }}" alt="Profile" class="rounded-circle" width="100px" height="100px">
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