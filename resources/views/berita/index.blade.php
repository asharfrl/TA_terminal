@include('officer.header')
@include('officer.navbar')
@include('officer.sidebar')
@include('officer.footer')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Berita</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/dataLaporan">Data Berita</a></li>
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
              <div class="card-header pb-0 d-flex justify-content-end">
                <div>
                  <a href="/berita/create" class="btn btn-sm mb-0 me-1 btn-success">Create</a>
                </div>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mt-4 mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">No</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Judul Berita</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Tanggal</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Foto</th>
                        <th class="text-uppercase text-xs font-weight-bolder" style="text-align: center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($berita as $row)
                        <tr>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            {{ $loop->iteration }}
                          </td>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            {{ $row->judul }}
                          </td>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            {{ $row->tgl }}
                          </td>
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            <img src="{{ asset('img/'.$row->foto) }}" width="100px" style="border-radius: 10px;">
                          </td>
                          {{-- <td class="text-xs font-weight-bolder" style="text-align: center;">
                            <a href="{{ asset('img/'.$row->foto) }}" target="_blank" data-toggle="modal" data-target="#imageModal">
                                <img src="{{ asset('img/'.$row->foto) }}" width="100px" style="border-radius: 10px;">
                            </a>
                          </td> --}}
                          <td class="text-xs font-weight-bolder" style="text-align: center;">
                            <form id="delete-form-{{ $row->id }}" action="{{ route('berita.destroy', $row->id) }}" method="POST">
                              <a href="{{ route('berita.edit', $row->id) }}" class="btn btn-sm mb-0 me-1 btn-warning">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('Apakah Anda yakin?')" class="btn btn-sm mb-0 me-1 btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>
