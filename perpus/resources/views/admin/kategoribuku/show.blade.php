@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Kategori Buku
					<br>
					<table class="table table-striped table-dark">
						<tr>
							<th>Nama</th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td>{{ $model->nama }}</td>
							<td><a class="btn btn-info" href= "{{ route('admin.bookcategory.edit', $model->id) }}">Ubah</a></td>
							<td>
								<form action="{{ route('admin.bookcategory.destroy', $model->id) }}" method="post">
									{{ csrf_field() }}
									{{ method_field('delete') }}
									<button class="btn btn-info">Hapus</button>
								</form>
							</td>
						</tr>
					</table>
					<br>
					<table class="table table-striped table-dark">
						<tr>
							<th>Buku yang berkategori: {{ $model->nama }}</th>
						</tr>
						<tr>
							<td>Judul</td>
							<td>Pengarang</td>
							<td></td>
						</tr>
						@foreach($model->books as $book)
						<tr>
						<td>{{ $book->judul }}</td>
						<td>{{ $book->pengarang }}</td>
						<td><a class="btn btn-info" href= "{{ route('admin.book.show', $book->id) }}">Lihat</a></td>
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection