@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    pustakawan
					<a class="btn btn-info" href= "{{ route('admin.pustakawan.create') }}">Tambah</a>
					<br>
					<input type="text" id="searchInput" onkeyup="filterFunction()" placeholder="Cari Nama..">
					<table id="datatable" class="table table-striped table-dark">
						<tr>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telepon</th>
							<th>Bagian Pekerjaan</th>
							<th></th>
						</tr>
						@foreach($pustakawans as $pustakawan)
						<tr>
							<td>{{ $pustakawan->nama }}</td>
							<td>{{ $pustakawan->alamat }}</td>
							<td>{{ $pustakawan->notelp }}</td>
							<td>{{ $pustakawan->jobdesc ? $pustakawan->jobdesc->name : 'Belum Memiliki Pekerjaan' }}</td>
							<td><a class="btn btn-info" href= "{{ route('admin.pustakawan.show', $pustakawan->id) }}">Lihat</a></td>
							
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection