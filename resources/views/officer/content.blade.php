<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


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
                                <h3>-</h3>
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
                                <h3>-</h3>
                                <p>Data Laporan</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- small box 2 -->
                <div class="col-lg-3 col-6">
                    <a href="/berangkat">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <div class="icon">
                                    <i class="bi bi-bus-front"></i>
                                </div>
                                <h3>-</h3>
                                <p>Data Keberangkatan Bus</p>
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
