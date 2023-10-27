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
                    <th>Foto</th>
                    <th>Isi Laporan</th>
                    <th>Tanggal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $inem)
                <tr>
                    <td>{{$inem->nik}}</td>
                    <td><img src="/upload_data/{{$inem->foto}}" alt="" style="width: 100px"></td>
                    <td>{{$inem->isi_laporan}}</td>
                    <td>{{$inem->tgl_pengaduan}}</td>
                    <td>                                   
                        <a href="{{url('admin/tanggapan')}}" class="btn btn-primary">
                        <i class="bi bi-plus-circle-fill"></i> Tanggapi
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</form>
</div>
</form>
