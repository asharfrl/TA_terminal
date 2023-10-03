<style>
/* CSS untuk elemen logo dan teks */
.logo {
    display: flex;
    align-items: center;
}

.logo img {
    max-width: 100%; /* Maksimum lebar gambar adalah lebar kontainer */
    height: auto; /* Menghindari distorsi gambar */
    margin-right: 10px; /* Margin kanan untuk memisahkan gambar dan teks */
    font-size: 1rem; /* Ukuran font awal */
}

/* Menggunakan media query untuk mengatur tampilan pada ukuran layar yang lebih kecil (perangkat seluler) */
@media (max-width: 768px) {
    .logo {
        flex-direction: column; /* Stack elemen vertikal pada layar kecil */
        text-align: center; /* Pusatkan teks pada layar kecil */
    }

    .logo img {
        margin-bottom: 5px; /* Beri margin bawah untuk memisahkan gambar dan teks */
        font-size: 0.8rem; /* Ukuran font saat layar semakin kecil */
    }
}


</style>
 <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        {{-- <img src="FlexStart/assets/img/logo.png" alt=""> --}}
        <span>Terminal Pondok Cabe</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
          <li><a class="getstarted scrollto" href="/laporan">Laporan Pelayanan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
