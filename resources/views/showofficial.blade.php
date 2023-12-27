@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">Official Tim</h3>

        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bold">Detail Official Tim</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Card dengan gambar di sebelah kiri -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ url('foto_official') . '/' . (isset($data_official) ? $data_official->foto_official : $data_official->foto_official) }}" alt="Foto"
                                class="card-img-top">
                        </div>
                    </div>

                    <!-- Card dengan teks di sebelah kanan -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- Data untuk pemain -->
                                @if (isset($data_official))
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><b>Nama</b>: {{ $data_official->nama_official }}</p>
                                            <p><b>Klub</b>: {{ $data_official->klub_official }}</p>
                                            <p><b>Usia</b>: {{ $data_official->usia_official }}</p>
                                            <p><b>Kategori</b>: {{ $data_official->kategori_official }}</p>
                                            <p><b>Tanggal</b>: {{ $data_official->tanggal_official }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><b>Pertandingan</b>: {{ $data_official->pertandingan_official }}</p>
                                            <p><b>Pelanggaran</b>: {{ $data_official->pelanggaran_official }}</p>
                                            <p><b>Sanksi</b>: {{ $data_official->sanksi_official }}</p>
                                            <p><b>Status</b>:
                                                @if ($data_official->status_official === 'Selesai')
                                                    <span style="color: green">{{ $data_official->status_official }}</span>
                                                @else
                                                    <span style="color: red">{{ $data_official->status_official }}</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/adminofficial" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
