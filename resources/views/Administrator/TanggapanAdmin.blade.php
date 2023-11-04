<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanggapan|Admin</title>
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

                    <form action="{{ url('simpanTanggapan') }}" method="post">
                        @csrf
                        <label for="id_pengaduan" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id_pengaduan" id="id_pengaduan"
                            placeholder="ID">
                        @error('id_pengaduan')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="tgl_tanggapan" class="form-label">TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_tanggapan" id="tgl_tanggapan"
                                placeholder="TANGGAL">
                        </div>
                        <div class="mb-3">
                            <label for="tanggapan" class="form-label">TANGGAPAN</label>
                            <input type="tanggapan" class="form-control" name="tanggapan" id="tanggapan"
                                placeholder="TANGGAPAN">
                        </div>
                        <div class="mb-3">
                            <label for="id_petugas" class="form-label">ID</label>
                            <input type="text" class="form-control" name="id_petugas" id="id_petugas"
                                placeholder="ID">
                        </div>
                        <button class="btn form-control btn-primary mb-2">Kirim</button>
                        <button class="btn form-control outline-succes mb-2" type="reset">Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>
