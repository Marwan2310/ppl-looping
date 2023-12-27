@extends('layout.adminmain')

@section('container')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Edit Data Wasit</h1>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="card-border" style="width: 18rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Gambar Lama</h3>
                                    <img src="{{ url('foto_wasit') . '/' . (isset($data_wasit) ? $data_wasit->foto_wasit : $data_wasit->foto_wasit) }}"
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
                        @if (isset($data_wasit))
                            <form method="post" action="{{ url('/adminwasit/' . $data_wasit->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_wasit" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama_wasit"
                                                name="nama_wasit" value="{{ $data_wasit->nama_wasit }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="usia_wasit" class="form-label">Usia</label>
                                            <input type="text" class="form-control" id="usia_wasit"
                                                name="usia_wasit" value="{{ $data_wasit->usia_wasit }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tanggal_wasit" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal_wasit"
                                                name="tanggal_wasit" value="{{ $data_wasit->tanggal_wasit }}">
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
                                            <label for="pertandingan_wasit" class="form-label">Pertandingan</label>
                                            <input type="text" class="form-control" id="pertandingan_wasit"
                                                name="pertandingan_wasit" readonly>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="pelanggaran_wasit" class="form-label">Pelanggaran</label>
                                            <input type="text" class="form-control" id="pelanggaran_wasit"
                                                name="pelanggaran_wasit"
                                                value="{{ $data_wasit->pelanggaran_wasit }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sanksi_wasit" class="form-label">Sanksi</label>
                                            <input type="text" class="form-control" id="sanksi_wasit"
                                                name="sanksi_wasit" value="{{ $data_wasit->sanksi_wasit }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="batas_wasit" class="form-label">Batas Akhir</label>
                                            <input type="date" class="form-control" id="batas_wasit"
                                                name="batas_wasit" value="{{ $data_wasit->batas_wasit }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status_wasit" class="form-label">Status</label>
                                            <select class="form-select" id="status_wasit" name="status_wasit">
                                                <option value="Selesai"
                                                    @if ($data_wasit->status_wasit == 'Selesai') selected @endif>Selesai</option>
                                                <option value="Belum Selesai"
                                                    @if ($data_wasit->status_wasit == 'Belum Selesai') selected @endif>Belum Selesai
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- HTML -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="foto_wasit" class="form-label">Ubah Foto</label>
                                            <input type="file" class="form-control" name="foto_wasit"
                                                id="foto_wasit" onchange="previewImage(event)">
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
            <a href="/adminwasit" class="btn btn-secondary">Kembali</a>s
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
