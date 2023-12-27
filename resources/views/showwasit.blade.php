@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">Wasit</h3>

        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bold">Detail Wasit</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Card dengan gambar di sebelah kiri -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ url('foto_wasit') . '/' . (isset($data_wasit) ? $data_wasit->foto_wasit : $data_wasit->foto_wasit) }}" alt="Foto"
                                class="card-img-top">
                        </div>
                    </div>

                    <!-- Card dengan teks di sebelah kanan -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- Data untuk pemain -->
                                @if (isset($data_wasit))
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><b>Nama</b>: {{ $data_wasit->nama_wasit }}</p>
                                            <p><b>Usia</b>: {{ $data_wasit->usia_wasit }}</p>
                                            <p><b>Tanggal</b>: {{ $data_wasit->tanggal_wasit }}</p>
                                            <p><b>Sanksi</b>: {{ $data_wasit->sanksi_wasit }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><b>Pertandingan</b>: {{ $data_wasit->pertandingan_wasit }}</p>
                                            <p><b>Pelanggaran</b>: {{ $data_wasit->pelanggaran_wasit }}</p>

                                            <p><b>Status</b>:
                                                @if ($data_wasit->status_wasit === 'Selesai')
                                                    <span style="color: green">{{ $data_wasit->status_wasit }}</span>
                                                @else
                                                    <span style="color: red">{{ $data_wasit->status_wasit }}</span>
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
                <a href="/adminwasit" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
