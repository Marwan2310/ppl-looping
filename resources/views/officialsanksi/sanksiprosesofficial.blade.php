@extends('layout.adminmain')

@section('container')
    <div class="container mt-5">
        <h3 class="font-weight-bold mb-5">Proses Sanksi Official</h3>

        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bold">Nama Official : {{ $data_official->nama_official }}</h4>
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
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><b>Tanggal</b>:</td>
                                                    <td>{{ $data_official->tanggal_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Klub</b>:</td>
                                                    <td>{{ $data_official->klub_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pelanggaran</b>:</td>
                                                    <td>{{ $data_official->pelanggaran_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sanksi</b>:</td>
                                                    <td>{{ $data_official->sanksi_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pelanggaran</b>:</td>
                                                    <td>{{ $data_official->pelanggaran_official }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sanksi</b>:</td>
                                                    <td>{{ $data_official->sanksi_official }}</td>
                                                </tr>

                                                <tr>
                                                    <td><b>Status</b>:</td>
                                                    <td>
                                                        @if ($data_official->status_official === 'Selesai')
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
                    </div>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-between align-items-center">
                <a href="/officialsanksi/officialm" class="btn btn-secondary">Kembali</a>


                @if (isset($data_official))
                    <div class="d-flex">
                        <a href='{{ route('sanksiofficial', ['id' => $data_official->id]) }}' class="btn btn-primary mx-2">
                            <i class="bi bi-chevron-left"></i> Lihat Sanksi Official
                        </a>
                        <a href='{{ route('sanksihistoriofficial', ['id' => $data_official->id]) }}'
                            class="btn btn-primary mx-2">
                            Lihat Histori Sanksi Official <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                @endif

            </div>


        </div>
    </div>
@endsection

</div>

