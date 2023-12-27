@extends('layout.adminmain')

@section('container')
    <div class="container mb-4">
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light fixed-top border" style="background-color: #2049C5;">
            <div class="container-fluid mx-5"> <!-- Menambahkan mx-3 di sini -->
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
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
                   <!-- Search form -->
                   <form class="d-flex" action="{{ route('cariwasit') }}" method="GET" class="mb-4">
                    <div class="input-group">
                        <input autocomplete="off" type="Pencarian" name="search" class="form-control rounded"
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xl-2 px-sm-2 px-0 bg-white">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <br><br><br>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="admin" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Tambah Data</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="/pemain/create" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">Pemain</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/official/create" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">Official Tim</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/wasit/create" class="nav-link px-0"> <span class="d-none d-sm-inline">Wasit</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Login/logout" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Logout</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>



            <div class="col-lg-9 mt-1">
                <br><br><br><br>
                <div class="col">
                    <!-- Konten untuk tab Pemain -->
                    <div class="tab-pane fade show active">
                        <div class="card">
                            <div class="card-header">
                                <h5>Wasit</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <!-- Isi untuk tab Pemain -->
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_wasit as $item)
                                                <tr>
                                                    <td>{{ $item->tanggal_wasit }}</td>
                                                    <td>{{ $item->nama_wasit }}</td>
                                                    <td>{{ $item->status_wasit }}</td>
                                                    <td>
                                                        <a class="btn btn-secondary btn-sm me-1"
                                                            href='{{ url('/adminwasit/' . $item->id) }}'>Detail</a>
                                                        <a class="btn btn-warning btn-sm"
                                                            href='{{ route('editwasit', ['id' => $item->id]) }}'>Edit</a>


                                                        <form onsubmit="return confirm('Apakah ingin Hapus')"
                                                            class="d-inline" action="{{ '/adminwasit/' . $item->id }}"
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
                                    {{ $data_wasit->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
