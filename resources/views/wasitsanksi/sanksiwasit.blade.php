@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">Sanksi Wasit</h3>

        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bold">Detail Wasit</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Card dengan gambar di sebelah kiri -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ url('foto_wasit') . '/' . (isset($data_wasit) ? $data_wasit->foto_wasit : $data_wasit->foto_wasit) }}"
                                alt="Foto" class="card-img-top">
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
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Nama</b>:</td>
                                                    <td>{{ $data_wasit->nama_wasit }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tanggal</b>:</td>
                                                    <td>{{ $data_wasit->tanggal_wasit }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pertandingan</b>:</td>
                                                    <td>{{ $data_wasit->pertandingan_wasit }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pelanggaran</b>:</td>
                                                    <td>{{ $data_wasit->pelanggaran_wasit }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sanksi</b>:</td>
                                                    <td>{{ $data_wasit->sanksi_wasit }}</td>
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

                <a href="/wasitsanksi/wasit" class="btn btn-secondary">Kembali</a>

                @if (isset($data_wasit))
                    <div class="d-flex">
                        <a href='{{ route('sanksiproseswasit', ['id' => $data_wasit->id]) }}' class="btn btn-primary mx-2">
                            Lihat Proses Sanksi Wasit <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href='{{ route('sanksihistoriwasit', ['id' => $data_wasit->id]) }}' class="btn btn-primary mx-2">
                            Lihat Histori Sanksi Wasit <i class="bi bi-chevron-double-right"></i>
                        </a>
                    </div>
                @endif

            </div>

        </div>
    </div>
@endsection

</div>
