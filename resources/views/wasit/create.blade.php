@extends('layout.adminmain')

@section('container')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Tambah Data Wasit</h1>
            </div>
            <div class="card-body">
                <form action="/adminwasit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama_wasit" class="form-label fw-bold">Nama</label>
                                <input type="text" class="form-control" id="nama_wasit" name="nama_wasit"
                                    value="{{ old('nama_wasit') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="usia_wasit" class="form-label fw-bold">Usia</label>
                                <input type="text" class="form-control" id="usia_wasit" name="usia_wasit"
                                    value="{{ old('usia_wasit') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="kategori_wasit" class="form-label fw-bold">Kategori</label>
                                <select class="form-select" id="kategori_wasit" name="kategori_wasit">
                                    <option value="Ringan" @if (old('kategori_wasit') == 'Ringan') selected @endif>Ringan</option>
                                    <option value="Berat" @if (old('kategori_wasit') == 'Berat') selected @endif>Berat</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_wasit" class="form-label fw-bold">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal_wasit" name="tanggal_wasit"
                                    value="{{ old('tanggal_wasit') }}">
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
                                <label for="pertandingan_wasit" class="form-label fw-bold">Pertandingan</label>
                                <input type="text" class="form-control" id="pertandingan_wasit" name="pertandingan_wasit"
                                    readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pelanggaran_wasit" class="form-label fw-bold">Pelanggaran</label>
                                <input type="text" class="form-control" id="pelanggaran_wasit" name="pelanggaran_wasit"
                                    value="{{ old('pelanggaran_wasit') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sanksi_wasit" class="form-label fw-bold">Sanksi</label>
                                <input type="text" class="form-control" id="sanksi_wasit" name="sanksi_wasit"
                                    value="{{ old('sanksi_wasit') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="batas_wasit" class="form-label fw-bold">Batas Akhir</label>
                                <input type="date" class="form-control" id="batas_wasit" name="batas_wasit"
                                    value="{{ old('batas_wasit') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status_wasit" class="form-label fw-bold">Status</label>
                                <select class="form-select" id="status_wasit" name="status_wasit">
                                    <option value="Belum Selesai" @if (old('status') == 'Belum Selesai') selected @endif>Belum
                                        Selesai</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="foto_wasit" class="form-label fw-bold">Foto</label>
                                <input type="file" class="form-control" name="foto_wasit" id="foto_wasit">
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
            var pertandinganInput = document.getElementById("pertandingan_wasit");

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
