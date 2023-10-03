@include('officer.header')
@include('officer.navbar')
@include('officer.sidebar')
@include('officer.footer')

<style>
    .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    }
</style>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Laporan</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/dataLaporan">Data Laporan</a></li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container-fluid py-4" style="border-radius: 100px">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              @if(session()->has('message'))
                <div class="mt-4 ms-3 me-3 text-light fw-bold alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
              @endif
              @if(session()->has('delete'))
                <div class="mt-4 ms-3 me-3 text-light fw-bold alert alert-danger" role="alert">
                    {{ session('delete') }}
                </div>
              @endif
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mt-4 mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">No</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Nama Pelapor</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Kontak</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Tipe</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Pesan</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Waktu</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                    $pageNumber = $laporan->currentPage();
                    $itemsPerPage = $laporan->perPage();
                    $startingNumber = ($pageNumber - 1) * $itemsPerPage + 1;
                    @endphp
                      @foreach($laporan as $row)
                        <tr>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            {{ $startingNumber++ }}
                          </td>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            {{ $row->nama_pelapor }}
                          </td>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            0{{ $row->kontak }}
                          </td>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            {{ $row->tipe }}
                          </td>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            {{ ($row->pesan) }}
                          </td>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            {{ $row->created_at->locale('id')->isoFormat('D MMMM YYYY H:mm') }}
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{ $laporan->onEachSide(1)->links() }}
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>
