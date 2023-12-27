@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">HIstori Pemain</h3>

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
                                            <h3>Profile Pemain</h3>
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
                                                    <td><b>Usia</b>:</td>
                                                    <td>{{ $data->usia }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Posisi</b>:</td>
                                                    <td>{{ $data->posisi }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Deadline</h3>
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Batas Akhir</b>:</td>
                                                    <td>{{ $data->batas }}</td>
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
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <h3>Histori Pemain</h3>
                                @if (isset($data))
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Pertandingan</th>
                                                <th scope="col">Pelanggaran</th>
                                                <th scope="col">Sanksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->kategori }}</td>
                                                <td>{{ $data->pertandingan }}</td>
                                                <td>{{ $data->pelanggaran }}</td>
                                                <td>{{ $data->sanksi }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                            <i class="bi bi-chevron-double-left"></i> Lihat Sanksi Pemain
                        </a>
                        <a href='{{ route('sanksiprosespemain', ['id' => $data->id]) }}'
                            class="btn btn-primary mx-2">
                            <i class="bi bi-chevron-left"></i> Lihat Proses Sanksi Pemain
                        </a>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection

</div>
