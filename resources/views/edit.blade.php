@extends('layout.adminmain')

@section('container')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Edit Data Pemain</h1>
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="card-border" style="width: 18rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Gambar Lama</h3>
                                    <img src="{{ url('foto') . '/' . (isset($data) ? $data->foto : $data->foto) }}"
                                        alt="Foto Lama"
                                        style="max-width: 100%; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 10px;">
                                </div>
                                <div class="col-md-12">
                                    <h3>Gambar Baru</h3>
                                    <img id="preview" src="#" alt="Preview"
                                        style="display: none; max-width: 100%; margin-top: 10px; border: 1px solid #ccc; border-radius: 10px;">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-8">
                        <!-- Data untuk pemain -->
                        @if (isset($data))
                            <form method="post" action="{{ '/admin/' . $data->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ $data->nama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="usia" class="form-label">Usia</label>
                                            <input type="text" class="form-control" id="usia" name="usia"
                                                value="{{ $data->usia }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <select class="form-select" id="kategori" name="kategori">
                                                <option value="Ringan" @if (old('kategori') == 'Ringan') selected @endif>
                                                    Ringan</option>
                                                <option value="Berat" @if (old('kategori') == 'Berat') selected @endif>
                                                    Berat</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="posisi" class="form-label">Posisi</label>
                                            <select class="form-select" id="posisi" name="posisi">
                                                <option value="Penjaga Gawang"
                                                    @if (old('posisi') == 'Penjaga Gawang') selected @endif>Penjaga
                                                    Gawang </option>
                                                <option value="Pemain Bertahan"
                                                    @if (old('posisi') == 'Pemain Bertahan') selected @endif>Pemain
                                                    Bertahan (Defender)</option>
                                                <option value="Bek Tengah"
                                                    @if (old('posisi') == 'Bek Tengah') selected @endif>Bek Tengah
                                                    (Center Back)</option>
                                                <option value="Bek Sayap" @if (old('posisi') == 'Bek Sayap') selected @endif>
                                                    Bek Sayap
                                                    (Wing Back)</option>
                                                <option value="Penyapu" @if (old('posisi') == 'Penyapu') selected @endif>
                                                    Penyapu
                                                    (Sweeper)</option>
                                                <option value="Gelandang" @if (old('posisi') == 'Gelandang') selected @endif>
                                                    Gelandang
                                                    (Midfielder)</option>
                                                <option value="Gelandang Bertahan"
                                                    @if (old('posisi') == 'Gelandang Bertahan') selected @endif>
                                                    Gelandang Bertahan (Defending Midfielder)</option>
                                                <option value="Gelandang Tengah"
                                                    @if (old('posisi') == 'Gelandang Tengah') selected @endif>
                                                    Gelandang Tengah (Center Midfielder)</option>
                                                <option value="Gelandang Serang"
                                                    @if (old('posisi') == 'Gelandang Serang') selected @endif>
                                                    Gelandang Serang (Attacking Midfielder)</option>
                                                <option value="Gelandang Sayap"
                                                    @if (old('posisi') == 'Gelandang Sayap') selected @endif>
                                                    Gelandang Sayap (Winger)</option>
                                                <option value="Penyerang"
                                                    @if (old('posisi') == 'Penyerang') selected @endif>Penyerang
                                                    (Forward)</option>
                                                <option value="Penyerang Tengah"
                                                    @if (old('posisi') == 'Penyerang Tengah') selected @endif>
                                                    Penyerang Tengah (Center Forward)</option>
                                                <option value="Penyerang Sayap"
                                                    @if (old('posisi') == 'Penyerang Sayap') selected @endif>
                                                    Penyerang Sayap (Wing Forward)</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="klub" class="form-label">Klub</label>
                                            <select class="form-select" id="klub" name="klub">
                                                <option value="">Pilih Klub</option>
                                                <option value="Arema FC"
                                                    @if (old('klub') == 'Arema FC') selected @endif>Arema FC
                                                </option>
                                                <option value="Bali United"
                                                    @if (old('klub') == 'Bali United') selected @endif>Bali
                                                    United</option>
                                                <option value="Barito Putera"
                                                    @if (old('klub') == 'Barito Putera') selected @endif>Barito
                                                    Putera</option>
                                                <option value="Bhayangkara"
                                                    @if (old('klub') == 'Bhayangkara') selected @endif>
                                                    Bhayangkara</option>
                                                <option value="Borneo FC"
                                                    @if (old('klub') == 'Borneo FC') selected @endif>Borneo FC
                                                </option>
                                                <option value="Dewa United"
                                                    @if (old('klub') == 'Dewa United') selected @endif>Dewa
                                                    United</option>
                                                <option value="Madura United"
                                                    @if (old('klub') == 'Madura United') selected @endif>Madura
                                                    United</option>
                                                <option value="Persebaya Surabaya"
                                                    @if (old('klub') == 'Persebaya Surabaya') selected @endif>
                                                    Persebaya Surabaya</option>
                                                <option value="Persib Bandung"
                                                    @if (old('klub') == 'Persib Bandung') selected @endif>
                                                    Persib Bandung</option>
                                                <option value="Persik Kediri"
                                                    @if (old('klub') == 'Persik Kediri') selected @endif>Persik
                                                    Kediri</option>
                                                <option value="Persikabo 1973"
                                                    @if (old('klub') == 'Persikabo 1973') selected @endif>
                                                    Persikabo 1973</option>
                                                <option value="Persija Jakarta"
                                                    @if (old('klub') == 'Persija Jakarta') selected @endif>
                                                    Persija Jakarta</option>
                                                <option value="Persis Solo"
                                                    @if (old('klub') == 'Persis Solo') selected @endif>Persis
                                                    Solo</option>
                                                <option value="Persita Tangerang"
                                                    @if (old('klub') == 'Persita Tangerang') selected @endif>
                                                    Persita Tangerang</option>
                                                <option value="PSIS Semarang"
                                                    @if (old('klub') == 'PSIS Semarang') selected @endif>PSIS
                                                    Semarang</option>
                                                <option value="PSM Makassar"
                                                    @if (old('klub') == 'PSM Makassar') selected @endif>PSM
                                                    Makassar</option>
                                                <option value="PSS Sleman"
                                                    @if (old('klub') == 'PSS Sleman') selected @endif>PSS
                                                    Sleman</option>
                                                <option value="RANS Nusantara"
                                                    @if (old('klub') == 'RANS Nusantara') selected @endif>RANS
                                                    Nusantara</option>
                                                <option value="Ringan" @if (old('klub') == 'Ringan') selected @endif>
                                                    Ringan
                                                </option>
                                                <option value="Berat" @if (old('klub') == 'Berat') selected @endif>
                                                    Berat
                                                </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                value="{{ $data->tanggal }}">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="klub1" class="form-label">Home</label>
                                            <select class="form-select" id="klub1">
                                                <option value="">Pilih Klub</option>
                                                <option value="Arema FC">Arema FC</option>
                                                <option value="Bali United">Bali United</option>
                                                <option value="Barito Putera">Barito Putera</option>
                                                <option value="Bhayangkara">Bhayangkara</option>
                                                <option value="Borneo FC">Borneo FC</option>
                                                <option value="Dewa United">Dewa United</option>
                                                <option value="Madura United">Madura United</option>
                                                <option value="Persebaya Surabaya">Persebaya Surabaya</option>
                                                <option value="Persib Bandung">Persib Bandung</option>
                                                <option value="Persik Kediri">Persik Kediri</option>
                                                <option value="Persikabo 1973">Persikabo 1973</option>
                                                <option value="Persija Jakarta">Persija Jakarta</option>
                                                <option value="Persis Solo">Persis Solo</option>
                                                <option value="Persita Tangerang">Persita Tangerang</option>
                                                <option value="PSIS Semarang">PSIS Semarang</option>
                                                <option value="PSM Makassar">PSM Makassar</option>
                                                <option value="PSS Sleman">PSS Sleman</option>
                                                <option value="RANS Nusantara">RANS Nusantara</option>
                                            </select>
                                        </div>
                                        <div class="mb-12">
                                            <label for="klub2" class="form-label">Away</label>
                                            <select class="form-select" id="klub2">
                                                <option value="">Pilih Klub</option>
                                                <option value="Arema FC">Arema FC</option>
                                                <option value="Bali United">Bali United</option>
                                                <option value="Barito Putera">Barito Putera</option>
                                                <option value="Bhayangkara">Bhayangkara</option>
                                                <option value="Borneo FC">Borneo FC</option>
                                                <option value="Dewa United">Dewa United</option>
                                                <option value="Madura United">Madura United</option>
                                                <option value="Persebaya Surabaya">Persebaya Surabaya</option>
                                                <option value="Persib Bandung">Persib Bandung</option>
                                                <option value="Persik Kediri">Persik Kediri</option>
                                                <option value="Persikabo 1973">Persikabo 1973</option>
                                                <option value="Persija Jakarta">Persija Jakarta</option>
                                                <option value="Persis Solo">Persis Solo</option>
                                                <option value="Persita Tangerang">Persita Tangerang</option>
                                                <option value="PSIS Semarang">PSIS Semarang</option>
                                                <option value="PSM Makassar">PSM Makassar</option>
                                                <option value="PSS Sleman">PSS Sleman</option>
                                                <option value="RANS Nusantara">RANS Nusantara</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="pertandingan" class="form-label">Pertandingan</label>
                                            <input type="text" class="form-control" id="pertandingan"
                                                name="pertandingan" readonly>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="pelanggaran" class="form-label">Pelanggaran</label>
                                            <input type="text" class="form-control" id="pelanggaran"
                                                name="pelanggaran" value="{{ $data->pelanggaran }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sanksi" class="form-label">Sanksi</label>
                                            <input type="text" class="form-control" id="sanksi" name="sanksi"
                                                value="{{ $data->sanksi }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="batas" class="form-label">Batas Akhir</label>
                                            <input type="date" class="form-control" id="batas" name="batas"
                                                value="{{ $data->batas }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" id="status" name="status">
                                                <option value="Selesai"
                                                    @if ($data->status == 'Selesai') selected @endif>Selesai</option>
                                                <option value="Belum Selesai"
                                                    @if ($data->status == 'Belum Selesai') selected @endif>Belum Selesai
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Ubah Foto</label>
                                            <input type="file" class="form-control" name="foto"
                                                id="foto" onchange="previewImage(event)">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <a href="/admin" class="btn btn-secondary">Kembali</a>
        </div>
    </div>




    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var klub1Dropdown = document.getElementById("klub1");
            var klub2Dropdown = document.getElementById("klub2");
            var pertandinganInput = document.getElementById("pertandingan");

            // Fungsi untuk memperbarui input "Pertandingan" berdasarkan pilihan klub
            function updatePertandingan() {
                var klub1 = klub1Dropdown.value;
                var klub2 = klub2Dropdown.value;

                pertandinganInput.value = klub1 + " vs " + klub2;
            }

            // Memanggil fungsi saat pilihan klub berubah
            klub1Dropdown.addEventListener("change", updatePertandingan);
            klub2Dropdown.addEventListener("change", updatePertandingan);

            // Memperbarui nilai pertama kali saat halaman dimuat
            updatePertandingan();
        });


        // JavaScript
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
