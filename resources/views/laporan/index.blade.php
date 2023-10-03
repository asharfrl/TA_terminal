@include('masyarakat.header')
@include('laporan.navbar')

@yield('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center container-head">
    {{-- <div class="container">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" style="color:rgb(69, 87, 245);">LAPORAN PELAYANAN</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400"><b>Laporkan Kritik Dan Saran</b></h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#contact" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Laporkan</span>
                            <i class="bi bi-arrow-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h1 data-aos="fade-up">LAPORAN PELAYANAN</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Laporkan Kritik Dan Saran Untuk <strong
                        style="color: #012970;">Terminal Tipe A Pondok Cabe</strong>
                </h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#contact"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span><b>LAPORKAN</b></span>
                            <i class="bi bi-hand-index-thumb"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('FlexStart') }}/assets/img/features-3.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="section-header">
                    {{-- <h2>ISI FORM DI BAWAH INI</h2> --}}
                    <p>ISI FORM DI BAWAH INI</p>

                </div>

                <form method="POST" action="{{ route('laporan.store') }}" class="php-email-form">
                    @csrf
                    <div class="row gy-4">


                        <div class="form-floating col-md-6 ">
                            <input name="nama_pelapor" class="form-control " placeholder="Nama Anda" required>
                            <label for="floatingInput">Nama Anda</label>
                        </div>

                        <div class="form-floating col-md-6">
                            <input class="form-control" name="kontak" placeholder="Kontak Anda" required>
                            <label for="floatingInput">Kontak Anda</label>
                        </div>

                        <div class="col-md-12">
                            <select class="form-select form-control text-center" name="tipe" id="tipeSelect">
                                <option disabled selected>Kritik / Saran</option>
                                <option value="Kritik">Kritik</option>
                                <option value="Saran">Saran</option>
                            </select>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" name="pesan" rows="5" placeholder="Masukkan Laporan Anda" required
                                id="pesanTextarea" disabled maxlength="255"></textarea>
                            <label for="floatingTextarea">Pilih Kritik / Saran</label>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit">Kirim</button>
                        </div>

                    </div>
                </form>

            </div>

            <div class="col-lg-6">

                <div class="row gy-4">

                    <div class="col-md-12">
                        <div class="info-box text-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Hubungi Kami</h3>
                            <p>+62 2127 5920 62</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="info-box text-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Alamat Email Kami</h3>
                            <p>terminalpondokcabe@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="info-box text-center">
                            <i class="bi bi-clock"></i>
                            <h3>Jam Operasi</h3>
                            <p>Setiap Hari<br>24 Jam</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section><!-- End Contact Section -->

<script>
    const tipeSelect = document.getElementById('tipeSelect');
    const pesanTextarea = document.getElementById('pesanTextarea');

    tipeSelect.addEventListener('change', function() {
        const selectedOption = tipeSelect.value;
        let label = '';

        if (selectedOption === 'Saran') {
            label = 'Masukkan Saran Anda';
        } else if (selectedOption === 'Kritik') {
            label = 'Masukkan Kritik Anda';
        } else {
            label = 'Masukkan Laporan Anda';
        }

        pesanTextarea.setAttribute('placeholder', label);
        document.querySelector('label[for="floatingTextarea"]').textContent = label;
    });

    document.addEventListener("DOMContentLoaded", function() {
        var tipeSelect = document.getElementById("tipeSelect");
        var pesanTextarea = document.getElementById("pesanTextarea");

        tipeSelect.addEventListener("change", function() {
            if (tipeSelect.value === "Saran" || tipeSelect.value === "Kritik") {
                pesanTextarea.removeAttribute("disabled");
            } else {
                pesanTextarea.setAttribute("disabled", "true");
                pesanTextarea.value = ""; // Mengosongkan pesan jika tipe tidak dipilih
            }
        });
    });
</script>
@include('masyarakat.footer')
