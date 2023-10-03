<style>
    /* CSS untuk Kotak Statistik */
.small-box {
    border-radius: 10px; /* Melengkungkan sudut kotak */
    background-color: #007bff; /* Warna latar belakang biru */
    color: #fff; /* Warna teks putih */
}

.small-box .inner {
    padding: 5px; /* Ruang bantalan di dalam kotak */
}

.small-box .icon {
    font-size: 45px; /* Ukuran ikon */
    text-align: right;
    padding-right: 15px;
}

.small-box .icon i {
    color: #fff; /* Warna ikon putih */
}

</style>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
        </nav>
      </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @if (auth()->user()->level == 'Admin')
                <div class="col-lg-3 col-6">
                    <!-- small box 1 -->
                    <a href="/dataPetugas">
                        <div class="small-box bg-succsess">
                            <div class="inner">
                                <div class="icon">
                                    <i class="bi bi-diagram-3"></i>
                                </div>
                                <h3>{{ $jumlahPetugas }}</h3>
                                <p>Data Petugas</p>
                            </div>
                        </div>
                    </a>
                </div>

                @elseif (auth()->user()->level == 'Petugas')
                <!-- small box 1 -->
                <div class="col-lg-3 col-6">
                    <!-- small box 1 -->
                    <a href="/dataLaporan">
                        <div class="small-box bg-succsess">
                            <div class="inner">
                                <div class="icon">
                                    <i class="bi bi-clipboard-data-fill"></i>
                                </div>
                                <h3>{{ $jumlahLaporan }}</h3>
                                <p>Data Laporan</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- small box 2 -->
                <div class="col-lg-3 col-6">
                    <a href="/berita">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <div class="icon">
                                    <i class="bi bi-newspaper"></i>
                                </div>
                                <h3>{{ $jumlahBerita }}</h3>
                                <p>Data Berita</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>


            <!-- ./col -->

  </main><!-- End #main -->
