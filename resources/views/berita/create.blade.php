@include('officer.header')
@include('officer.navbar')
@include('officer.sidebar')
@include('officer.footer')

  <main id="main" class="main">
    <section class="section profile">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="/berita" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Judul Berita</label>
                                        <input class="form-control" name="judul" id="judul" type="text" placeholder="Masukkan Judul ..." value="{{ old('judul') }}" required autofocus>
                                        @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tanggal</label>
                                        <input class="form-control" name="tgl" id="tgl" type="datetime-local" placeholder="Masukkan Tanggal ..." value="{{ old('tgl') }}" required>
                                        @error('tgl')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Foto</label>
                                        <input class="form-control" name="foto" id="foto" type="file" placeholder="Masukkan Foto ..." value="{{ old('foto') }}"
                                        accept="img/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" required>
                                        @error('foto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mt-1">
                                          <img src="" id="output" width="150" style="padding: 3px; border: 2px; border-radius: 10px;"><small style="color:rgb(255, 0, 0);">Foto Anda</small>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex justify-content-end mt-4">
                                <a href="javascript:history.back()" class="btn btn-danger btn-sm me-3">Kembali</a>
                                <button class="btn btn-primary btn-sm me-3">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
