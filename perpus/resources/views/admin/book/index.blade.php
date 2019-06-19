@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Books
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
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection