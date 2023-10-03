@include('officer.header')

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <img src="FlexStart/assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
                                <span class="ms-3 font-weight-bold">Terminal Tipe A</span>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">
                                    @if (session('loginError'))
                                        <div class="mt-4 ms-3 me-3 alert alert-danger alert-dismissible fade show"
                                            role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            {{ session('loginError') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session('RegistSuccess'))
                                        <div class="mt-4 ms-3 me-3 alert alert-success alert-dismissible fade show"
                                            role="alert">
                                            <i class="bi bi-check-circle me-1"></i>
                                            {{ session('RegistSuccess') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Log In Ke Akun Anda</h5>
                                        <p class="text-center small">Masukkan Username dan Password</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="/logins" method="POST">
                                        @csrf

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="username" class="form-control"
                                                    id="yourUsername" required>
                                                <div class="invalid-feedback">Tolong, Masukkan Username Anda !</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Tolong, Masukkan Password Anda !</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Tidak Mempunyai Akun ?
                                                <a href="/register">Register</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('NiceAdmin') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('NiceAdmin') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('NiceAdmin') }}/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('NiceAdmin') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('NiceAdmin') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('NiceAdmin') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('NiceAdmin') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('NiceAdmin') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('NiceAdmin') }}/assets/js/main.js"></script>

</body>

</html>
