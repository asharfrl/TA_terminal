@include('officer.header')
@include('officer.navbar')
@include('officer.sidebar')
@include('officer.footer')

<style>
      .table-striped tbody tr:hover {
        background-color: #ddd;
    }

    .btn:hover {
        background-color: #e57373; /* Ganti dengan warna yang Anda inginkan */
    }

    .table th, .table td {
        padding: 8px; /* Ganti dengan ukuran padding yang Anda inginkan */
    }
</style>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Petugas</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dataPetugas">Data Petugas</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

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
              <a href="/dataPetugas/create" class="btn btn-sm mb-0 me-1 btn-success">Create</a>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mt-4 mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-xs font-weight-bolder">No</th>
                    <th class="text-uppercase text-xs font-weight-bolder">Nama Petugas</th>
                    <th class="text-uppercase text-xs font-weight-bolder">Level</th>
                    <th class="text-uppercase text-xs font-weight-bolder">Username</th>
                    <th class="text-uppercase text-xs font-weight-bolder">Email</th>
                    <th class="text-uppercase text-xs font-weight-bolder">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($petugas as $row)
                    <tr>
                      <td class="text-xs font-weight-bolder">
                        {{ $loop->iteration }}
                      </td>
                      <td class="text-xs font-weight-bolder">
                        {{ $row->name }}
                      </td>
                      <td class="text-xs font-weight-bolder">
                        <span class="{{ strtolower($row->level) }}-text">
                            {{ $row->level }}
                        </span>
                      </td>
                      <td class="text-xs font-weight-bolder">
                        {{ $row->username }}
                      </td>
                      <td class="text-xs font-weight-bolder">
                        {{ ($row->email) }}
                      </td>
                      <td class="text-xs font-weight-bolder">
                        <form id="delete-form-{{ $row->id }}" action="{{ route('dataPetugas.destroy', $row->id) }}" method="POST">
                          <a href="{{ route('dataPetugas.edit', $row->id) }}" class="btn btn-sm mb-0 me-1 btn-warning">Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="button" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-sm mb-0 me-1 btn-danger">Delete</button>
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

