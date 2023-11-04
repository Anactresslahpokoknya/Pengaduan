@extends('Masyarakat.LayoutMasyarakat')

@section('title')
    Laporkan
@endsection

@section('isi_halaman')
    <div class="container text-center d-flex justify-content-center align-items-center vh-100">
        <div class="">

            <h3>Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
            <a href="{{ url('pengaduan') }}" type="button" class="btn btn-primary">Buat Laporan</a>
        </div>
    </div>
@endsection
