@extends('layout.adminmain')

@section('container')
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 500px) {
                .cascading-right {
                    margin-right: 0;
                }
            }

            .card {
                border: none;
                border-radius: 15px;
            }

            .card-body {
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
            }

            .form-outline {
                position: relative;
                margin-bottom: 1rem;
            }

            .form-outline input.form-control {
                padding: 1.5rem 1rem;
                border: none;
                border-radius: 10px;
                background-color: #f5f5f5;
            }

            .form-outline label {
                position: absolute;
                top: 0.8rem;
                left: 1rem;
                color: #aaa;
                transition: 0.3s;
                padding: 0 0.5rem;
            }

            .form-outline input.form-control:focus+.form-label,
            .form-outline input.form-control:valid+.form-label {
                transform: translateY(-1.5rem);
                font-size: 0.8rem;
                color: #6c757d;
                background-color: #f5f5f5;
                padding: 0 0.3rem;
            }

            .btn-primary {
                background-color: #007bff;
                border: none;
                border-radius: 10px;
                padding: 1rem;
                font-weight: bold;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right shadow">
                        <div class="card-body p-5 text-center rounded-4">
                            <h2 class="fw-bold mb-5">Login</h2>
                            <form action="/Login/login" method="POST">
                                @csrf

                                <!-- Email input -->
                                <div class="form-outline">
                                    <input type="email" name="email" class="form-control"
                                        value="{{ Session::get('email') }}" required />
                                    <label class="form-label">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline">
                                    <input type="password" name="password" class="form-control" required />
                                    <label class="form-label">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mt-4">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="bola1.jpg" class="w-100 rounded-4 shadow" style="max-width: 75%;"
                        alt="" />
                </div>

            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
@endsection
