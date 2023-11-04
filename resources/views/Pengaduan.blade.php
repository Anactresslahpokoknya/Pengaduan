@extends('Masyarakat.LayoutMasyarakat')
@section('isi_halaman')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="{{ url('pengaduan') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1>Isi Laporan</h1>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tgl_pengaduan">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">Nik</label>
                        <input type="text" class="form-control" name="nik">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input class="form-control" type="file" name="foto">
                    </div>
                    <div class="mb-3">
                        <button class="btn form-control btn-primary mb-2">Buat Laporan</button>
                        <button class="btn form-control outline-succes mb-2" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
