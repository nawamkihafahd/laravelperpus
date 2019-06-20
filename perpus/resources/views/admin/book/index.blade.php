@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Books
					<a class="btn btn-info" href= "{{ route('admin.book.create') }}">Tambah</a>
					<br>
					<table class="table table-striped table-dark">
						<tr>
							<th>Judul</th>
							<th>Pengarang</th>
						</tr>
						@foreach($books as $book)
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