<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi|Admin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">Daftarkan diri anda</h4>

                    @if (session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{ session('pesan') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-success" role="alert">
                            gagal registrasi
                        </div>
                    @endif

                    <form action="{{ url('simpan1') }}" method="post">
                        @csrf
                            <label for="nama_petugas" class="form-label">NAMA PETUGAS</label>
                            <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="NAMA PETUGAS">
                            @error('nama_petugas')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="USERNAME">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">PASSWORD</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="PASSWORD">
                            </div>
                            <div class="mb-3">
                                <label for="telp" class="form-label">TELEPON</label>
                                <input type="text" class="form-control" name="telp" id="telp"
                                    placeholder="TELEPON">
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">LEVEL</label>
                               <div class="col-10">
                                <select class="form-select" id="" name="level">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option></select>
                               </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn form-control btn-primary mb-2">Registrasi</button>
                                <button class="btn form-control outline-succes mb-2" type="reset">Batal</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
