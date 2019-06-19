@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Pelanggan
					<a class="btn btn-info" href= "{{ route('admin.pelanggan.create') }}">Tambah</a>
					<table class="table table-striped table-dark">
						<tr>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telepon</th>
							<th></th>
						</tr>
						@foreach($pelanggans as $pelanggan)
						<tr>
							<td>{{ $pelanggan->nama }}</td>
							<td>{{ $pelanggan->alamat }}</td>
							<td>{{ $pelanggan->notelp }}</td>
							<td><a class="btn btn-info" href= "{{ route('admin.pelanggan.show', $pelanggan->id) }}">Lihat</a></td>
							
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection