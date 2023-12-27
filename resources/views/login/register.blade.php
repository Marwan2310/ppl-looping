@extends('layout.adminmain')

@section('container')
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right"
                        style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Register</h2>
                            <form action="/Login/register" method="POST">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">

                                    <div class="form-outline mb-4">
                                        <input type="text" name="name" class="form-control" />
                                        <label class="form-label">Masukan Nama</label>
                                    </div>


                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}" />
                                    <label class="form-label">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" class="form-control" />
                                    <label class="form-label">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Register
                                </button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
                        alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
@endsection
