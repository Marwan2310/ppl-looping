@extends('layout.adminmain')

@section('container')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Tambah Data Official Tim</h1>
            </div>
            <div class="card-body">
                <form action="/adminofficial" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama_official" class="form-label fw-bold">Nama</label>
                                <input type="text" class="form-control" id="nama_official" name="nama_official"
                                    value="{{ old('nama_official') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="usia_official" class="form-label fw-bold">Usia</label>
                                <input type="text" class="form-control" id="usia_official" name="usia_official"
                                    value="{{ old('usia_official') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="kategori_official" class="form-label fw-bold">Kategori</label>
                                <select class="form-select" id="kategori_official" name="kategori_official">
                                    <option value="Ringan" @if (old('kategori_official') == 'Ringan') selected @endif>Ringan</option>
                                    <option value="Berat" @if (old('kategori_official') == 'Berat') selected @endif>Berat</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="klub_official" class="form-label fw-bold">Klub</label>
                                <select class="form-select" id="klub_official" name="klub_official">
                                    <option value="">Pilih Klub</option>
                                    <option value="Arema FC" @if (old('klub_officia') == 'Arema FC') selected @endif>Arema FC
                                    </option>
                                    <option value="Bali United" @if (old('klub_officia') == 'Bali United') selected @endif>Bali
                                        United</option>
                                    <option value="Barito Putera" @if (old('klub_officia') == 'Barito Putera') selected @endif>Barito
                                        Putera</option>
                                    <option value="Bhayangkara" @if (old('klub_officia') == 'Bhayangkara') selected @endif>
                                        Bhayangkara</option>
                                    <option value="Borneo FC" @if (old('klub_officia') == 'Borneo FC') selected @endif>Borneo FC
                                    </option>
                                    <option value="Dewa United" @if (old('klub_officia') == 'Dewa United') selected @endif>Dewa
                                        United</option>
                                    <option value="Madura United" @if (old('klub_officia') == 'Madura United') selected @endif>Madura
                                        United</option>
                                    <option value="Persebaya Surabaya" @if (old('klub_officia') == 'Persebaya Surabaya') selected @endif>
                                        Persebaya Surabaya</option>
                                    <option value="Persib Bandung" @if (old('klub_officia') == 'Persib Bandung') selected @endif>
                                        Persib Bandung</option>
                                    <option value="Persik Kediri" @if (old('klub_officia') == 'Persik Kediri') selected @endif>Persik
                                        Kediri</option>
                                    <option value="Persikabo 1973" @if (old('klub_officia') == 'Persikabo 1973') selected @endif>
                                        Persikabo 1973</option>
                                    <option value="Persija Jakarta" @if (old('klub_officia') == 'Persija Jakarta') selected @endif>
                                        Persija Jakarta</option>
                                    <option value="Persis Solo" @if (old('klub_officia') == 'Persis Solo') selected @endif>Persis
                                        Solo</option>
                                    <option value="Persita Tangerang" @if (old('klub_officia') == 'Persita Tangerang') selected @endif>
                                        Persita Tangerang</option>
                                    <option value="PSIS Semarang" @if (old('klub_officia') == 'PSIS Semarang') selected @endif>PSIS
                                        Semarang</option>
                                    <option value="PSM Makassar" @if (old('klub_officia') == 'PSM Makassar') selected @endif>PSM
                                        Makassar</option>
                                    <option value="PSS Sleman" @if (old('klub_officia') == 'PSS Sleman') selected @endif>PSS
                                        Sleman</option>
                                    <option value="RANS Nusantara" @if (old('klub_officia') == 'RANS Nusantara') selected @endif>RANS
                                        Nusantara</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_official" class="form-label fw-bold">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal_official" name="tanggal_official"
                                    value="{{ old('tanggal_official') }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="klub1" class="form-label fw-bold">Home</label>
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
                                <label for="klub2" class="form-label fw-bold">Away</label>
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
                                <label for="pertandingan_official" class="form-label fw-bold">Pertandingan</label>
                                <input type="text" class="form-control" id="pertandingan_official" name="pertandingan_official"
                                    readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pelanggaran_official" class="form-label fw-bold">Pelanggaran</label>
                                <input type="text" class="form-control" id="pelanggaran_official" name="pelanggaran_official"
                                    value="{{ old('pelanggaran_official') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sanksi_official" class="form-label fw-bold">Sanksi</label>
                                <input type="text" class="form-control" id="sanksi_official" name="sanksi_official"
                                    value="{{ old('sanksi_official') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="batas_official" class="form-label fw-bold">Batas Akhir</label>
                                <input type="date" class="form-control" id="batas_official" name="batas_official"
                                    value="{{ old('batas_official') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status_official" class="form-label fw-bold">Status</label>
                                <select class="form-select" id="status_official" name="status_official">
                                    <option value="Belum Selesai" @if (old('status') == 'Belum Selesai') selected @endif>Belum
                                        Selesai</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="foto_official" class="form-label fw-bold">Foto</label>
                                <input type="file" class="form-control" name="foto_official" id="foto_official">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <a href="/admin" class="btn btn-secondary">Kembali</a>
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
    </script>
@endsection
