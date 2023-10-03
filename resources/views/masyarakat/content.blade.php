<style>
    .container-head {
        background-size: cover;
        background-repeat: no-repeat;
        /* background-position: center center; */
        padding: 100px;
        position: relative;
    }

    /* Efek lapisan transparan (opsional) */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    /* Menggunakan kelas khusus untuk mengubah radius sudut gambar */
    .custom-rounded {
        border-radius: 30px;
        /* Ubah nilai ini sesuai dengan preferensi Anda */
        padding: 3px;
        border: 4px solid;
        color: #4154f1;
    }

    .blurred-video {
        filter: blur(px);
        /* Adjust the blur amount as needed */
    }

    .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Adjust to 'contain' if you want the entire video to be visible */
        z-index: -1;
        /* Place the video behind other content */
        filter: blur(3px);
        /* Adjust blur amount as needed */
    }

    .portfolio-border {
        border-radius: 20px;
    }

    .slider-container {
        width: 100%;
        overflow: hidden;
    }

    .slider {
        display: flex;
        transition: transform 0.3s ease-in-out;
    }

    .slider img {
        flex: 0 0 100%;
        /* Gambar mengisi lebar slider */
    }
</style>



<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center container-head"
        style="background-image:url('{{ asset('FlexStart') }}/assets/img/terminal/19.png'">
        <div class="container">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" style="color:rgb(69, 87, 245);">Selamat Datang Di Halaman Terminal Tipe A Pondok
                    Cabe</h1>
                <h2 data-aos="fade-up" data-aos-delay="400" style="color: rgba(0, 0, 0, 0.663)"><b>KAMI SIAP MELAYANI ANDA
                        DENGAN SENANG HATI</b></h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    {{-- <div class="text-center text-lg-start">
                    <a class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                      <span><b>KAMI SIAP MELAYANI ANDA DENGAN SENANG HATI</b></span>
                    </a>
                  </div> --}}
                    <div class="text-center text-lg-start">
                        <a href="#about"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span><b>EKSPLORASI</b></span>
                            <i class="bi bi-hand-index-thumb"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <main id="main">
        <!-- ======= About Section ======= -->

        {{-- style="background-image:url('{{asset('FlexStart')}}/assets/img/terminal/1.jpeg'" --}}
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Kenal Lebih Dekat</h3>
                            <h2>Dimana Lokasi Terminal ?</h2>
                            <p>
                                Terminal Pondok Cabe merupakan Terminal Penumpang Tipe A yang terletak di Jalan Kemiri
                                Raya, Pondok Cabe Udik, Pamulang, Kota Tangerang Selatan. Terminal Pondok Cabe memiliki
                                luas 25.995 meter persegi.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#features"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Fasilitas</span>
                                    <i class="bi bi-hand-index-thumb"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <div class="slider-container">
                            <div class="slider">
                                <img src="{{ asset('FlexStart') }}/assets/img/terminal/1.jpeg"
                                    class="img-fluid custom-rounded" alt="">
                                <img src="{{ asset('FlexStart') }}/assets/img/terminal/4.jpeg"
                                    class="img-fluid custom-rounded" alt="">
                                <img src="{{ asset('FlexStart') }}/assets/img/terminal/2.jpeg"
                                    class="img-fluid custom-rounded" alt="">
                                <!-- Tambahkan lebih banyak gambar di sini sesuai kebutuhan -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Ada Fasilitas Apa Saja ?</p>
                </header>

                <div class="row">

                    {{-- <div class="col-lg-6 mt-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <video autoplay loop muted class="img-fluid custom-rounded blurred-video">
                            <source src="{{ asset('FlexStart') }}/assets/img/terminal/2.mp4" type="video/mp4">
                        </video>
                    </div> --}}

                    <div class="col-lg-6 mt-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <video controls autoplay loop muted class="img-fluid custom-rounded blurred-video">
                            <source src="{{ asset('FlexStart') }}/assets/img/terminal/2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        {{-- <section id="about" class="about">
                            <div class="text-center text-lg-start">
                                <a href="#team"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Galeri</span>
                                    <i class="bi bi-hand-index-thumb"></i>
                                </a>
                            </div>
                        </section> --}}
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pos Pengaduan</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Area Parkir Kendaraan</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Ruang Pembelian Tiket</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Ruang Laktasi</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Toilet</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Ruang Tunggu</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Musholla</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Ruang Kesehatan</h3>
                                </div>
                            </div>

                        </div>
                    </div>
        </section><!-- End Features Section -->
        <br>
        <br>

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Galeri Terminal</h2>
                    <p>Suasana Terminal</p>
                </header>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('FlexStart') }}/assets/img/terminal/17.png"
                                class="img-fluid portfolio-border" alt="">
                            <div class="portfolio-info">
                                <h4>Fasilitas</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset('FlexStart') }}/assets/img/terminal/2.mp4" type="video/mp4"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Fasilitas Terminal"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    </div> --}}

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('FlexStart') }}/assets/img/terminal/1.jpeg"
                                class="img-fluid portfolio-border" alt="">
                            <div class="portfolio-info">
                                <h4>Terminal</h4>
                                {{-- <p>Web</p> --}}
                                <div class="portfolio-links">
                                    <a href="{{ asset('FlexStart') }}/assets/img/terminal/1.jpeg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Terminal"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('FlexStart') }}/assets/img/terminal/3.jpeg"
                                class="img-fluid portfolio-border" alt="">
                            <div class="portfolio-info">
                                <h4>Terminal Side</h4>
                                {{-- <p>App</p> --}}
                                <div class="portfolio-links">
                                    <a href="{{ asset('FlexStart') }}/assets/img/terminal/3.jpeg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Terminal Side"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('FlexStart') }}/assets/img/terminal/6.jpeg"
                                class="img-fluid portfolio-border" alt="">
                            <div class="portfolio-info">
                                <h4>Runnable</h4>
                                {{-- <p>App</p> --}}
                                <div class="portfolio-links">
                                    <a href="{{ asset('FlexStart') }}/assets/img/terminal/6.jpeg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Runnable"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('FlexStart') }}/assets/img/terminal/7.jpeg"
                                class="img-fluid portfolio-border" alt="">
                            <div class="portfolio-info">
                                <h4>Lobby</h4>
                                {{-- <p>Card</p> --}}
                                <div class="portfolio-links">
                                    <a href="{{ asset('FlexStart') }}/assets/img/terminal/7.jpeg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Lobby"><i
                                            class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('FlexStart') }}/assets/img/terminal/8.jpeg"
                                class="img-fluid portfolio-border" alt="">
                            <div class="portfolio-info">
                                <h4>Waiting Room</h4>
                                {{-- <p>Web</p> --}}
                                <div class="portfolio-links">
                                    <a href="{{ asset('FlexStart') }}/assets/img/terminal/8.jpeg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Waiting Room"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('FlexStart') }}/assets/img/terminal/5.jpeg"
                                class="img-fluid portfolio-border" alt="">
                            <div class="portfolio-info">
                                <h4>Parking Area</h4>
                                {{-- <p>App</p> --}}
                                <div class="portfolio-links">
                                    <a href="{{ asset('FlexStart') }}/assets/img/terminal/5.jpeg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="Parking Area"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        {{-- style="background-image:url('{{asset('FlexStart')}}/assets/img/terminal/3.jpeg'" --}}
        <section id="blog" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Berita Terminal Terkini</p>
                </header>

                <div class="row">

                    @php
                        $counter = 0;
                    @endphp

                    @foreach ($berita as $row)
                        @if ($counter < 3)
                            <div class="col-lg-4">
                                <div class="post-box">
                                    <div class="post-img">
                                        <img src="{{ asset('img/' . $row->foto) }}" class="img-fluid" alt="">
                                    </div>
                                    <span class="post-date">{{ \Carbon\Carbon::parse($row->tgl)->format('d M Y H:i T') }}</span>
                                    <h3 class="post-title">{{ $row->judul }}</h3>
                                </div>
                            </div>
                        @endif

                        @php
                            $counter++;
                        @endphp
                    @endforeach

                </div>

            </div>

        </section>
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>WELLLLLLLLLLLLLLLLLLL</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('FlexStart') }}/assets/img/terminal/18.jpeg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a style="color: white;" href="https://www.instagram.com/dimasafzal_/"
                                        target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Dimas Faiz</h4>
                                <span>CEO MIXUE</span>
                                <h3><b>VERY GOOD VERY WELL!!!!!<br>WELLLLLLLLLLLL</b></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('FlexStart') }}/assets/img/terminal/18.jpeg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a style="color: white;" href="https://www.instagram.com/dimasafzal_/"
                                        target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Faiz Dimas</h4>
                                <span>CEO MIXUE</span>
                                <h3><b>VERY GOOD VERY WELL!!!!!<br>WELLLLLLLLLLLL</b></h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

    </main><!-- End #main -->

    <script>
        const slider = document.querySelector('.slider');
        const slideWidth = slider.offsetWidth; // Lebar satu slide
        let currentSlide = 0;

        function nextSlide() {
            if (currentSlide < slider.children.length - 1) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }
            updateSlider();
        }

        function updateSlider() {
            const translateValue = -currentSlide * slideWidth;
            slider.style.transform = `translateX(${translateValue}px)`;
        }

        // Interval waktu dalam milidetik (contoh: 3000ms = 3 detik)
        const intervalTime = 3000;

        // Memulai slider otomatis
        setInterval(nextSlide, intervalTime);
    </script>
