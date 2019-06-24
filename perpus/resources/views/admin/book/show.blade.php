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
							<th>Cover</th>
							<th>File</th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td>{{ $model->judul }}</td>
							<td>{{ $model->pengarang }}</td>
							<td><img src="{{ asset($model->showImage()) }}" style="width:200px;height:200px;"></td>
							<td><a class="btn btn-info" href="{{ asset($model->showFile()) }}">Download</a></td>
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
					<br>
					<table class="table table-striped table-dark">
						<tr>
							<th>Kategori Buku {{ $model->judul }}</th>
							<th></th>
							<th></th>
						</tr>
						
						@foreach($model->bookcategories as $bookcategory)
						<tr>
							<td>{{ $bookcategory->nama }}</td>
							<td>
								<form action="{{ route('admin.book.destroycategory') }}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $model->id }}"></input>
									<input type="hidden" name="categoryid" value="{{ $bookcategory->id }}"></input>
									<button class="btn btn-info">Hapus kategori</button>
								</form>
							</td>
							<td><a class="btn btn-info" href= "{{ route('admin.bookcategory.show', $bookcategory->id) }}">Lihat Kategori</a></td>
						</tr>
						@endforeach
						
					</table>
					<form action="{{ route('admin.book.addcategory') }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $model->id }}">
						<select class="form-control" id="jobdesc" name="categoryid"></input>
							@foreach ($bookcategories as $bookcategory)
								<option value="{{ $bookcategory->id }}">{{ $bookcategory->nama }}</option>
							@endforeach
						</select>
						<button type="submit" class="btn btn-info">Tambah kategori</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection