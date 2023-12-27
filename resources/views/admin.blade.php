@extends('layout.adminmain')
@section('container')
    {{-- Halaman Admin Pemain --}}

    <div class="container mb-4">
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light fixed-top border" style="background-color: #2049C5;">
            <div class="container-fluid mx-5">
                <!-- Brand Logo -->
                <a class="navbar-brand" href="admin">
                    <img src="logo.png" height="40" alt="Logo" loading="lazy" />
                </a>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto navbar-dark">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="admin">Pemain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="adminofficial">Official Tim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="adminwasit">Wasit</a>
                        </li>
                    </ul>
                    <!-- Search form -->
                    <form class="d-flex" action="{{ route('caripemain') }}" method="GET" class="mb-4">
                        <div class="input-group">
                            <input autocomplete="off" type="Pencarian" name="searchadmin" class="form-control rounded"
                                placeholder='Pencarian' />
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="bi bi-search text-white"></i>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </nav>
    </div>

    {{-- Menu di SideBars --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xl-2 px-sm-2 px-0">
                <div class="d-flex flex-column mb-4 align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-2 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="admin" class="nav-link">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Tambah Data</span>
                            </a>
                            <ul class="collapse nav flex-column ms-3" id="submenu3" data-bs-parent="#menu">
                                <li class="nav-item">
                                    <a href="/admin/create" class="nav-link"> <span class="d-none d-sm-inline">Pemain</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="/official/create" class="nav-link"> <span class="d-none d-sm-inline">Official Tim</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="/wasit/create" class="nav-link"> <span class="d-none d-sm-inline">Wasit</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="Login/logout" class="nav-link">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            {{-- Content --}}
            <div class="col-lg-9 mt-1">
                <br><br><br><br>
                <div class="col">
                    <!-- Konten untuk tab Pemain -->
                    <div class="tab-pane fade show active">
                        <div class="card">
                            <div class="card-header">
                                <h5>Pemain</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <!-- Isi untuk tab Pemain -->
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Posisi</th>
                                                <th scope="col">Klub</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->tanggal }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->posisi }}</td>
                                                    <td>{{ $item->klub }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <a class="btn btn-secondary btn-sm me-1"
                                                            href='{{ url('/admin/' . $item->id) }}'>Detail</a>
                                                        <a class="btn btn-warning btn-sm"
                                                            href='{{ url('/admin/' . $item->id . '/edit') }}'>Edit</a>

                                                        <form onsubmit="return confirm('Apakah ingin Hapus')"
                                                            class="d-inline" action="{{ '/admin/' . $item->id }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
