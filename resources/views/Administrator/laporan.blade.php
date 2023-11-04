@extends('Administrator.Layout')
@section('content')
    <form action="" method="post">
        @csrf
        <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
            <h4 class="card-title">Data</h4>

        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>FOTO</th>
                        <th>isi laporan</th>
                        <th>tgl pengaduan</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $inem)
                        <tr>
                            <td>{{ $inem->nik }}</td>
                            <td><img src="/upload_data/{{ $inem->foto }}" alt="" style="width: 50px"></td>
                            <td>{{ $inem->isi_laporan }}</td>
                            <td>{{ $inem->tgl_pengaduan }}</td>
                            <td>{{ $inem->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
