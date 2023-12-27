@extends('layout.adminmain')

@section('container')
<div class="container my-3">
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light fixed-top border" style="background-color: #2049C5;">
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand mr-auto" href="admin">
            <img src="/logo.png" height="40" alt="Logo" loading="lazy" />
        </a>


            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto navbar-dark mr-2">
                    <li class="nav-item ">
                        <a class="nav-link" href="/sanksi/pemain" role="button" aria-expanded="false">
                            Pemain
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="/officialsanksi/officialm" role="button" aria-expanded="false">
                            Official Tim
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="/wasitsanksi/wasit" role="button" aria-expanded="false">
                            Wasit
                        </a>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link px-0 align-middle text-white">
                        <span class="ms-1 d-none d-sm-inline">Logout <i class="bi bi-box-arrow-right"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>





    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-9 mt-5">
                <br><br>
                <h2 class="mb-2">Wasit</h2>
                <br><br><br>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('officialm') }}" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>

                        <!-- Player Table -->
                        <div class="table-responsive">
                            <div class="container mt-4">
                                <div class="row row-cols-1 row-cols-md-3 g-2">
                                    @foreach ($data_wasit as $item)
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $item->nama_wasit }}</h5>
                                                    <p class="card-text">Tanggal: {{ $item->tanggal_wasit }}</p>


                                                    <a href='{{ route('sanksiwasit', ['id' => $item->id]) }}'
                                                        class="btn btn-primary btn-sm">
                                                        Lihat Sanksi <i class="bi bi-arrow-right-square"></i>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{ $data_wasit->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
