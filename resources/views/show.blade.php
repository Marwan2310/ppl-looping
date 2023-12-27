@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">Sanksi Pemain</h3>

        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bold">Detail Pemain</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Card dengan gambar di sebelah kiri -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ url('foto') . '/' . (isset($data) ? $data->foto : $data->foto) }}" alt="Foto"
                                class="card-img-top">
                        </div>
                    </div>

                    <!-- Card dengan teks di sebelah kanan -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- Data untuk pemain -->
                                @if (isset($data))
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><b>Nama</b>: {{ $data->nama }}</p>
                                            <p><b>Klub</b>: {{ $data->klub }}</p>
                                            <p><b>Usia</b>: {{ $data->usia }}</p>
                                            <p><b>Kategori</b>: {{ $data->kategori }}</p>
                                            <p><b>Posisi</b>: {{ $data->posisi }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><b>Tanggal</b>: {{ $data->tanggal }}</p>
                                            <p><b>Pertandingan</b>: {{ $data->pertandingan }}</p>
                                            <p><b>Pelanggaran</b>: {{ $data->pelanggaran }}</p>
                                            <p><b>Sanksi</b>: {{ $data->sanksi }}</p>
                                            <p><b>Status</b>:
                                                @if ($data->status === 'Selesai')
                                                    <span style="color: green">{{ $data->status }}</span>
                                                @else
                                                    <span style="color: red">{{ $data->status }}</span>
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
                <a href="/admin" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
