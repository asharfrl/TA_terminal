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
                                <span class="d-none d-lg-block">Terminal Tipe A</span>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">
                                    @if (session('error'))
                                        <div class="mt-4 ms-3 me-3 alert alert-danger alert-dismissible fade show"
                                            role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session('error2'))
                                        <div class="mt-4 ms-3 me-3 alert alert-danger alert-dismissible fade show"
                                            role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            {{ session('error2') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Buat Akun Anda</h5>
                                        <p class="text-center small">Masukkan Data Anda Untuk Membuat Akun</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="/registers" method="POST">
                                        @csrf

                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Nama Anda</label>
                                            <input type="text" name="name" class="form-control" id="yourName"
                                                required>
                                            <div class="invalid-feedback">Tolong, Masukkan Nama Anda !</div>
                                        </div>

                                        {{-- <div class="col-12">
                      <label for="yourEmail" class="form-label">Email Anda</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Tolong, Masukkan Email Dengan Benar !</div>
                    </div> --}}

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email Anda</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email" class="form-control" id="yourEmail"
                                                    required>
                                                <div class="invalid-feedback">Tolong, Masukkan Email Dengan Benar !
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="username" class="form-control"
                                                    id="yourUsername" required>
                                                <div class="invalid-feedback">Masukkan Username Pilihan Anda !</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Masukkan Password Pilihan Anda !</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox"
                                                    value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">Saya Setuju dan
                                                    Menerima <a href="#">Syarat dan Ketentuan</a></label>
                                                <div class="invalid-feedback">Anda Harus Setuju Untuk Mengirim.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Register</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Sudah Mempunyai Akun ? <a href="/login">Log in</a>
                                            </p>
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

    <script>
        // Mendapatkan elemen input email
        var emailInput = document.getElementById('yourEmail');

        // Mendapatkan elemen pesan kesalahan
        var errorFeedback = document.querySelector('.invalid-feedback');

        // Menambahkan event listener untuk memeriksa input saat perubahan terjadi
        emailInput.addEventListener('input', function() {
            // Mendapatkan nilai input email
            var emailValue = emailInput.value;

            // Memeriksa apakah email mengandung simbol "@"
            if (emailValue.includes('@')) {
                // Email valid, menghapus pesan kesalahan
                errorFeedback.style.display = 'none';
            } else {
                // Email tidak valid, menampilkan pesan kesalahan
                errorFeedback.style.display = 'block';
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mendapatkan elemen formulir
            var form = document.querySelector('form.needs-validation');

            // Mendapatkan elemen input
            var nameInput = document.getElementById('yourName');
            var emailInput = document.getElementById('yourEmail');
            var usernameInput = document.getElementById('yourUsername');
            var passwordInput = document.getElementById('yourPassword');
            var termsInput = document.getElementById('acceptTerms');

            // Mendapatkan elemen pesan kesalahan
            var nameError = nameInput.nextElementSibling;
            var emailError = emailInput.nextElementSibling;
            var usernameError = usernameInput.nextElementSibling;
            var passwordError = passwordInput.nextElementSibling;
            var termsError = termsInput.nextElementSibling;

            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                // Validasi nama (tidak boleh kosong)
                if (!nameInput.value) {
                    nameError.textContent = 'Tolong, Masukkan Nama Anda!';
                } else {
                    nameError.textContent = '';
                }

                // Validasi email (harus mengandung @)
                if (!emailInput.value.includes('@')) {
                    emailError.textContent = 'Tolong, Masukkan Email Dengan Benar!';
                } else {
                    emailError.textContent = '';
                }

                // Validasi username (tidak boleh kosong)
                if (!usernameInput.value) {
                    usernameError.textContent = 'Masukkan Username Pilihan Anda!';
                } else {
                    usernameError.textContent = '';
                }

                // Validasi password (tidak boleh kosong)
                if (!passwordInput.value) {
                    passwordError.textContent = 'Masukkan Password Pilihan Anda!';
                } else {
                    passwordError.textContent = '';
                }

                // Validasi persetujuan terms
                if (!termsInput.checked) {
                    termsError.textContent = 'Anda Harus Setuju Untuk Mengirim.';
                } else {
                    termsError.textContent = '';
                }
            });

            // Menghapus pesan kesalahan saat input berubah
            nameInput.addEventListener('input', function() {
                nameError.textContent = '';
            });

            emailInput.addEventListener('input', function() {
                emailError.textContent = '';
            });

            usernameInput.addEventListener('input', function() {
                usernameError.textContent = '';
            });

            passwordInput.addEventListener('input', function() {
                passwordError.textContent = '';
            });

            termsInput.addEventListener('change', function() {
                termsError.textContent = '';
            });
        });
    </script>


</body>

</html>
