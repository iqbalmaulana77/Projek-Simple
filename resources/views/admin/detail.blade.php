@extends('../tamplate_admin')

@section('title', 'Detail Pengaduan')

@section('content')
<div class="container">

    <!-- DataTales Example -->
    <div class="card shadow">

        {{-- Card Header --}}
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h5>
        </div>

        {{-- Card Body --}}
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5 text-center">
                    <a href="{{asset('img/'.$pengaduan->foto)}}" target="_blank">
                        <img src="{{asset('img/'.$pengaduan->foto)}}" class="card-img-bottom rounded img-fluid shadow" style="width:400px; height:280px;"  alt="Klik untuk lebih jelas">
                    </a>
                </div>
            </div>

            <div class="row">                
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped" cellspacing="0">
                            <tr>
                                <td>Tanggal Pengaduan</td>
                                <td>:</td>
                                <td><strong>{{ $pengaduan->tgl_pengaduan }}</strong></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><strong>{{ $pengaduan->masyarakat->nik }}</strong></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><strong>{{ $pengaduan->masyarakat->nama }}</strong></td>
                            </tr>
                            <tr>
                                <td>No. Telepon</td>
                                <td>:</td>
                                <td><strong>{{ $pengaduan->masyarakat->telp }}</strong></td>
                            </tr>
                            <tr>
                                <td>Isi Laporan</td>
                                <td>:</td>
                                <td><strong>{{ $pengaduan->isi_laporan }}</strong></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    <h5><strong>{{ $pengaduan->status }}</strong></h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
	</div>
	<div class="text-center mt-3 mb-5 pb-5">
        {{-- button delete --}}
        <form method="post" action="{{url('/admin/data_pengaduan/'.$pengaduan->id_pengaduan)}}" class="d-inline">
            @csrf
            @method('delete')
		    <a href="{{ url('/admin/dashboard_admin') }}" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?');"><i class="fas fa-trash"></i> <span class="d-none d-lg-inline">Delete</span></button>
            {{-- button tanggapi --}}
            <a class="btn btn-success" href="{{url('/admin/tanggapan/'.$pengaduan->id_pengaduan)}}"><i class="fas fa-check"></i> Tanggapi</a>
        </form>
	</div>
    
</div>
@endsection