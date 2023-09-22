<style>
    .container-head {
      background-image: url('FlexStart/assets/img/terminal/3.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 100px;
      position: relative;
      /* Menambahkan efek blur */
      backdrop-filter: blur(100px); /* Ubah nilai 10px sesuai dengan seberapa besar efek blur yang Anda inginkan */
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
        border-radius: 50px; /* Ubah nilai ini sesuai dengan preferensi Anda */
    }

  </style>



<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

    {{-- <div class="content-layer"></div>
      <div class="container-head overlay">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up" style="color: rgb(17, 17, 17); ">Selamat Datang Di Halaman Terminal Pondok Cabe</h1>
            <h2 data-aos="fade-up" data-aos-delay="400" ><b>KAMI SIAP MELAYANI ANDA DENGAN SENANG HATI</b></h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Eksplorasi</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Selamat Datang Di Halaman Terminal Pondok Cabe</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">KAMI SIAP MELAYANI ANDA DENGAN SENANG HATI</h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Eksplorasi</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('FlexStart')}}/assets/img/terminal/3.jpeg" class="img-fluid custom-rounded" alt="">
          </div>
        </div>
      </div>
    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">

      <section id="about" class="about" style="background-image:url('{{asset('FlexStart')}}/assets/img/terminal/1.jpeg'">

        <div class="container" data-aos="fade-up" >
          <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>Kenal Lebih Dekat</h3>
                <h2>Dimana Lokasi Terminal ?</h2>
                <p>
                    Terminal Pondok Cabe merupakan Terminal Penumpang Tipe A yang terletak di Jalan Kemiri Raya, Pondok Cabe Udik, Pamulang, Kota Tangerang Selatan. Terminal Pondok Cabe memiliki luas 25.995 meter persegi.
                </p>
                <div class="text-center text-lg-start">
                    <a href="#portfolio" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Galeri</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="FlexStart/assets/img/terminal/2.jpeg" class="img-fluid custom-rounded" alt="">
            </div>
          </div>
        </div>

      </section><!-- End About Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Galeri Terminal</h2>
            <p>Suasana Terminal</p>
          </header>

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="FlexStart/assets/img/terminal/3.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Terminal</h4>
                  {{-- <p>App</p> --}}
                  <div class="portfolio-links">
                    <a href="FlexStart/assets/img/terminal/3.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Terminal"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="FlexStart/assets/img/terminal/4.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Runnable</h4>
                  {{-- <p>Web</p> --}}
                  <div class="portfolio-links">
                    <a href="FlexStart/assets/img/terminal/4.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Runnable"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="FlexStart/assets/img/terminal/6.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Shalter Keberangkatan</h4>
                  {{-- <p>App</p> --}}
                  <div class="portfolio-links">
                    <a href="FlexStart/assets/img/terminal/6.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Parking Area"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="FlexStart/assets/img/terminal/7.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Lobby</h4>
                  {{-- <p>Card</p> --}}
                  <div class="portfolio-links">
                    <a href="FlexStart/assets/img/terminal/7.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Lobby"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="FlexStart/assets/img/terminal/8.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Waiting Room</h4>
                  {{-- <p>Web</p> --}}
                  <div class="portfolio-links">
                    <a href="FlexStart/assets/img/terminal/8.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Waiting Room"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset('FlexStart')}}/assets/img/terminal/5.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Parking Bus Area</h4>
                  {{-- <p>App</p> --}}
                  <div class="portfolio-links">
                    <a href="{{asset('FlexStart')}}/assets/img/terminal/5.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Parking Area 2"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Portfolio Section -->

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="blog" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Blog</h2>
            <p>Berita Terminal Terkini</p>
          </header>

          <div class="row">

            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="FlexStart/assets/img/terminal/9.jpeg" class="img-fluid" alt=""></div>
                <span class="post-date">Mon, September 5</span>
                <h3 class="post-title">Bis Sinar Jaya</h3>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="FlexStart/assets/img/terminal/12.jpeg" class="img-fluid" alt=""></div>
                <span class="post-date">Mon, September 5</span>
                <h3 class="post-title">Rampcheck Bus Oleh Petugas Terminal</h3>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="FlexStart/assets/img/terminal/10.jpeg" class="img-fluid" alt=""></div>
                <span class="post-date">Mon, September 5</span>
                <h3 class="post-title">Bis Agra Mas</h3>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
