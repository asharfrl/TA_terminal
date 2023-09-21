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
                        <form class="forms-sample" method="post" action="{{ route('dataPetugas.update', $petugas->id) }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control" name="username" id="username" type="text" placeholder="Masukkan username ..." value="{{ old('username', $petugas->username) }}" required autofocus>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <input class="form-control" name="email" id="email" type="text" placeholder="Masukkan username ..." value="{{ old('email', $petugas->email) }}" required autofocus>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Password&nbsp;<small style="color: red;">(JANGAN LUPA PASSWORD DIUBAH)</small></label>
                                        <input class="form-control" name="password" id="password" type="password" placeholder="Masukkan password ..." value="{{ old('password', $petugas->password) }}" required>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama Petugas</label>
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Masukkan nama petugas ..." value="{{ old('name', $petugas->name) }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Level</label>
                                        <select class="form-control" name="level" id="level" value="{{ old('level', $petugas->level) }}" required>
                                            <option value="Admin">Admin</option>
                                            <option value="Petugas">Petugas</option>
                                        </select>
                                        @error('level')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
