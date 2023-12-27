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
                            <div class="card-body p-4">
                                <!-- Data untuk pemain -->
                                @if (isset($data))
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Nama</b>:</td>
                                                    <td>{{ $data->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Klub</b>:</td>
                                                    <td>{{ $data->klub }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tanggal</b>:</td>
                                                    <td>{{ $data->tanggal }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pertandingan</b>:</td>
                                                    <td>{{ $data->pertandingan }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pelanggaran</b>:</td>
                                                    <td>{{ $data->pelanggaran }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sanksi</b>:</td>
                                                    <td>{{ $data->sanksi }}</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-between align-items-center">
                <a href="/sanksi/pemain" class="btn btn-secondary">Kembali</a>

                @if (isset($data))
                    <div class="d-flex">
                        <a href='{{ route('sanksiprosespemain', ['id' => $data->id]) }}' class="btn btn-primary mx-2">
                            Lihat Proses Sanksi Pemain <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href='{{ route('sanksihistoripemain', ['id' => $data->id]) }}'
                            class="btn btn-primary mx-2">
                            Lihat Histori Sanksi Pemain <i class="bi bi-chevron-double-right"></i>
                        </a>
                    </div>
                @endif
            </div>


        </div>
    </div>
@endsection

</div>
