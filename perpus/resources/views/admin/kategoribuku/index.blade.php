@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Kategori Buku
					<a class="btn btn-info" href= "{{ route('admin.bookcategory.create') }}">Tambah</a>
					<br>
					<input type="text" id="searchInput" onkeyup="filterFunction()" placeholder="Cari Kategori..">
					<table id="datatable" class="table table-striped table-dark">
						<tr>
							<th>Nama Kategori</th>
							<th></th>
						</tr>
						@foreach($categories as $category)
						<tr>
							<td>{{ $category->nama }}</td>
							<td><a class="btn btn-info" href= "{{ route('admin.bookcategory.show', $category->id) }}">Lihat</a></td>
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection