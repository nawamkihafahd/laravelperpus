@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Buku
					<br>
					<table class="table table-striped table-dark">
						<tr>
							<th>Judul</th>
							<th>Pengarang</th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td>{{ $model->judul }}</td>
							<td>{{ $model->pengarang }}</td>
							<td><a class="btn btn-info" href= "{{ route('admin.book.edit', $model->id) }}">Ubah</a></td>
							<td>
								<form action="{{ route('admin.book.destroy', $model->id) }}" method="post">
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