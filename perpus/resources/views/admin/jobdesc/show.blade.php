@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Jenis Pekerjaan
					<br>
					<table class="table table-striped table-dark">
						<tr align="center">
							<th colspan="5">Bagian Pekerjaan: {{ $model->name }}</th>
						</tr>
						<tr align="center">
							<th colspan="5">Gaji: Rp.{{ $model->salary }},-</th>
						</tr>
						<tr align="center">
							<td colspan="3"><a class="btn btn-info" href= "{{ route('admin.jobdesc.edit', $model->id) }}">Ubah Jenis Pekerjaan</a></td>
							<td colspan="2">
								<form action="{{ route('admin.jobdesc.destroy', $model->id) }}" method="post">
									{{ csrf_field() }}
									{{ method_field('delete') }}
									<button class="btn btn-info">Hapus Jenis Pekerjaan</button>
								</form>
							</td>
						</tr>
					</table>
					<br>
					<br>
					<table class="table table-striped table-dark">
						<tr align="center">
							<th colspan="5">Daftar Pustakawan dengan pekerjaan : {{ $model->name }}</th>
						</tr>
						<tr>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telepon</th>
							<th>Bagian Pekerjaan</th>
							<th></th>
						</tr>
						@foreach( $model->pustakawans as $pustakawan)
						<tr>
							<td>{{ $pustakawan->nama }}</td>
							<td>{{ $pustakawan->alamat }}</td>
							<td>{{ $pustakawan->notelp }}</td>
							<td>{{ $pustakawan->jobdesc->name }}</td>
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