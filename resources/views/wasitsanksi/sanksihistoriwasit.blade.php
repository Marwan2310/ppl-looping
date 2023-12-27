@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">HIstori Wasit</h3>

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
                                            <h3>Profile Wasit</h3>
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Nama</b>:</td>
                                                    <td>{{ $data_wasit->nama_wasit }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Usia</b>:</td>
                                                    <td>{{ $data_wasit->usia_wasit }}</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Deadline</h3>
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Batas Akhir</b>:</td>
                                                    <td>{{ $data_wasit->batas_wasit }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Status</b>:</td>
                                                    <td>
                                                        @if ($data_wasit->status_wasit === 'Selesai')
                                                            <span style="color: green">{{ $data_wasit->status_wasit }}</span>
                                                        @else
                                                            <span style="color: red">{{ $data_wasit->status_wasit }}</span>
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
                                <h3>Histori Wasit</h3>
                                @if (isset($data_wasit))
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Pertandingan</th>
                                                <th scope="col">Pelanggaran</th>
                                                <th scope="col">Sanksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $data_wasit->tanggal_wasit }}</td>
                                                <td>{{ $data_wasit->pertandingan_wasit }}</td>
                                                <td>{{ $data_wasit->pelanggaran_wasit }}</td>
                                                <td>{{ $data_wasit->sanksi_wasit     }}</td>
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

                <a href="/wasitsanksi/wasit" class="btn btn-secondary">Kembali</a>


                @if (isset($data_wasit))
                    <div class="d-flex">
                        <a href='{{ route('sanksiwasit', ['id' => $data_wasit->id]) }}' class="btn btn-primary mx-2">
                            <i class="bi bi-chevron-double-left"></i> Lihat Sanksi Wasit
                        <a href='{{ route('sanksiproseswasit', ['id' => $data_wasit->id]) }}'
                            class="btn btn-primary mx-2">
                            <i class="bi bi-chevron-left"></i> Lihat Proses Sanksi Wasit
                        </a>
                    </div>
                @endif


            </div>
        </div>
    </div>
@endsection

</div>
