@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">HIstori Official Tim</h3>

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
                                <!-- Data untuk Official Tim -->
                                @if (isset($data_official))
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Profile Official Tim</h3>
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Nama</b>:</td>
                                                    <td>{{ $data_official->nama_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Klub</b>:</td>
                                                    <td>{{ $data_official->klub_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Usia</b>:</td>
                                                    <td>{{ $data_official->usia_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Posisi</b>:</td>
                                                    <td>{{ $data_official->posisi_official }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Deadline</h3>
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Batas Akhir</b>:</td>
                                                    <td>{{ $data_official->batas_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Status</b>:</td>
                                                    <td>
                                                        @if ($data_official->status === 'Selesai')
                                                            <span style="color: green">{{ $data_official->status_official }}</span>
                                                        @else
                                                            <span style="color: red">{{ $data_official->status_official }}</span>
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
                                @if (isset($data_official))
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
                                                <td>{{ $data_official->tanggal_official }}</td>
                                                <td>{{ $data_official->kategori_official }}</td>
                                                <td>{{ $data_official->pertandingan_official }}</td>
                                                <td>{{ $data_official->pelanggaran_official }}</td>
                                                <td>{{ $data_official->sanksi_official }}</td>
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
                <a href="/officialsanksi/officialm" class="btn btn-secondary">Kembali</a>


                @if (isset($data_official))
                    <div class="d-flex">
                        <a href='{{ route('sanksiofficial', ['id' => $data_official->id]) }}' class="btn btn-primary mx-2">
                            <i class="bi bi-chevron-double-left"></i> Lihat Sanksi Official
                        </a>
                        <a href='{{ route('sanksiprosesofficial', ['id' => $data_official->id]) }}'
                            class="btn btn-primary mx-2">
                            <i class="bi bi-chevron-left"></i> Lihat Proses Sanksi Official
                        </a>
                    </div>
                @endif

            </div>


        </div>
    </div>
@endsection

</div>
