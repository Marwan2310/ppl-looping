@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">Proses Sanksi Pemain</h3>

        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bold">Nama Pemain : {{ $data->nama }}</h4>
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
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Tanggal</b>:</td>
                                                    <td>{{ $data->tanggal }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Klub</b>:</td>
                                                    <td>{{ $data->klub }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pelanggaran</b>:</td>
                                                    <td>{{ $data->pelanggaran }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sanksi</b>:</td>
                                                    <td>{{ $data->sanksi }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pelanggaran</b>:</td>
                                                    <td>{{ $data->pelanggaran }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sanksi</b>:</td>
                                                    <td>{{ $data->sanksi }}</td>
                                                </tr>

                                                <tr>
                                                    <td><b>Status</b>:</td>
                                                    <td>
                                                        @if ($data->status === 'Selesai')
                                                            <span style="color: green">{{ $data->status }}</span>
                                                        @else
                                                            <span style="color: red">{{ $data->status }}</span>
                                                        @endif
                                                    </td>
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
                        <a href='{{ route('sanksipemain', ['id' => $data->id]) }}' class="btn btn-primary mx-2">
                            <i class="bi bi-chevron-left"></i> Lihat Sanksi Pemain
                        </a>
                        <a href='{{ route('sanksihistoripemain', ['id' => $data->id]) }}'
                            class="btn btn-primary mx-2">
                            Lihat Histori Sanksi Pemain <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

</div>
