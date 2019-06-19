@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Pelanggan
					<br>
					<table class="table table-striped table-dark">
						<tr>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telepon</th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td>{{ $model->nama }}</td>
							<td>{{ $model->alamat }}</td>
							<td>{{ $model->notelp }}</td>
							<td><a class="btn btn-info" href= "{{ route('admin.pelanggan.edit', $model->id) }}">Ubah</a></td>
							<td>
								<form action="{{ route('admin.pelanggan.destroy', $model->id) }}" method="post">
									{{ csrf_field() }}
									{{ method_field('delete') }}
									<button class="btn btn-info">Hapus</button>
								</form>
							</td>
						</tr>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection