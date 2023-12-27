@extends('layout.adminmain')

@section('container')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Edit Data Official Tim</h1>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="card-border" style="width: 18rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Gambar Lama</h3>
                                    <img src="{{ url('foto_official') . '/' . (isset($data_official) ? $data_official->foto_official : $data_official->foto_official) }}"
                                        alt="Foto Lama" style="max-width: 100%; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 10px;">
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
                        @if (isset($data_official))
                            <form method="post" action="{{ url('/adminofficial/' . $data_official->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_official" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama_official"
                                                name="nama_official" value="{{ $data_official->nama_official }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="usia_official" class="form-label">Usia</label>
                                            <input type="text" class="form-control" id="usia_official"
                                                name="usia_official" value="{{ $data_official->usia_official }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kategori_official" class="form-label">Kategori</label>
                                            <select class="form-select" id="kategori_official" name="kategori_official">
                                                <option value="Ringan" @if (old('kategori_official') == 'Ringan') selected @endif>
                                                    Ringan</option>
                                                <option value="Berat" @if (old('kategori_official') == 'Berat') selected @endif>
                                                    Berat</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="klub_official" class="form-label">Klub</label>
                                            <select class="form-select" id="klub_official" name="klub_official">
                                                <option value="">Pilih Klub</option>
                                                <option value="Arema FC" @if (old('klub_official') == 'Arema FC') selected @endif>
                                                    Arema FC
                                                </option>
                                                <option value="Bali United"
                                                    @if (old('klub_official') == 'Bali United') selected @endif>Bali
                                                    United</option>
                                                <option value="Barito Putera"
                                                    @if (old('klub_official') == 'Barito Putera') selected @endif>Barito
                                                    Putera</option>
                                                <option value="Bhayangkara"
                                                    @if (old('klub_official') == 'Bhayangkara') selected @endif>
                                                    Bhayangkara</option>
                                                <option value="Borneo FC" @if (old('klub_official') == 'Borneo FC') selected @endif>
                                                    Borneo FC
                                                </option>
                                                <option value="Dewa United"
                                                    @if (old('klub_official') == 'Dewa United') selected @endif>Dewa
                                                    United</option>
                                                <option value="Madura United"
                                                    @if (old('klub_official') == 'Madura United') selected @endif>Madura
                                                    United</option>
                                                <option value="Persebaya Surabaya"
                                                    @if (old('klub_official') == 'Persebaya Surabaya') selected @endif>
                                                    Persebaya Surabaya</option>
                                                <option value="Persib Bandung"
                                                    @if (old('klub_official') == 'Persib Bandung') selected @endif>
                                                    Persib Bandung</option>
                                                <option value="Persik Kediri"
                                                    @if (old('klub_official') == 'Persik Kediri') selected @endif>Persik
                                                    Kediri</option>
                                                <option value="Persikabo 1973"
                                                    @if (old('klub_official') == 'Persikabo 1973') selected @endif>
                                                    Persikabo 1973</option>
                                                <option value="Persija Jakarta"
                                                    @if (old('klub_official') == 'Persija Jakarta') selected @endif>
                                                    Persija Jakarta</option>
                                                <option value="Persis Solo"
                                                    @if (old('klub_official') == 'Persis Solo') selected @endif>Persis
                                                    Solo</option>
                                                <option value="Persita Tangerang"
                                                    @if (old('klub_official') == 'Persita Tangerang') selected @endif>
                                                    Persita Tangerang</option>
                                                <option value="PSIS Semarang"
                                                    @if (old('klub_official') == 'PSIS Semarang') selected @endif>PSIS
                                                    Semarang</option>
                                                <option value="PSM Makassar"
                                                    @if (old('klub_official') == 'PSM Makassar') selected @endif>PSM
                                                    Makassar</option>
                                                <option value="PSS Sleman"
                                                    @if (old('klub_official') == 'PSS Sleman') selected @endif>PSS
                                                    Sleman</option>
                                                <option value="RANS Nusantara"
                                                    @if (old('klub_official') == 'RANS Nusantara') selected @endif>RANS
                                                    Nusantara</option>
                                                <option value="Ringan" @if (old('klub_official') == 'Ringan') selected @endif>
                                                    Ringan
                                                </option>
                                                <option value="Berat" @if (old('klub_official') == 'Berat') selected @endif>
                                                    Berat
                                                </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tanggal_official" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal_official"
                                                name="tanggal_official" value="{{ $data_official->tanggal_official }}">
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
                                            <label for="pertandingan_official" class="form-label">Pertandingan</label>
                                            <input type="text" class="form-control" id="pertandingan_official"
                                                name="pertandingan_official" readonly>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="pelanggaran_official" class="form-label">Pelanggaran</label>
                                            <input type="text" class="form-control" id="pelanggaran_official"
                                                name="pelanggaran_official"
                                                value="{{ $data_official->pelanggaran_official }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sanksi_official" class="form-label">Sanksi</label>
                                            <input type="text" class="form-control" id="sanksi_official"
                                                name="sanksi_official" value="{{ $data_official->sanksi_official }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="batas_official" class="form-label">Batas Akhir</label>
                                            <input type="date" class="form-control" id="batas_official"
                                                name="batas_official" value="{{ $data_official->batas_official }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status_official" class="form-label">Status</label>
                                            <select class="form-select" id="status_official" name="status_official">
                                                <option value="Selesai"
                                                    @if ($data_official->status_official == 'Selesai') selected @endif>Selesai</option>
                                                <option value="Belum Selesai"
                                                    @if ($data_official->status_official == 'Belum Selesai') selected @endif>Belum Selesai
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- HTML -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="foto_official" class="form-label">Ubah Foto</label>
                                            <input type="file" class="form-control" name="foto_official"
                                                id="foto_official" onchange="previewImage(event)">
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
            <a href="/adminofficial" class="btn btn-secondary">Kembali</a>s
        </div>
    </div>




    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var klub1Dropdown = document.getElementById("klub1");
            var klub2Dropdown = document.getElementById("klub2");
            var pertandinganInput = document.getElementById("pertandingan_official");

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
