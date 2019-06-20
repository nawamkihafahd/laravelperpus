@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Buku</div>

                <div class="card-body">
                    
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form action= "{{ route('admin.book.store') }}" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="Judul">Judul: </label>
							<input type="text" class="form-control" id="Judul" name="judul" placeholder="Nama*">
						</div>
						<br>
						<div class="form-group">
							<label for="Pengarang">Pengarang: </label>
							<input type="text" class="form-control" id="Pengarang" name="pengarang" placeholder="Alamat*">
						</div>
						<br>
						<div class="form-group">
							<label for="coverurl">Gambar Cover: </label>
							<input type="file" class="form-control" id="coverurl" name="coverurl">
						</div>
						<br>
						<div class="form-group">
							<label for="FileBuku">File: </label>
							<input type="file" class="form-control" id="FileBuku" name="fileurl">
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Tambah</input>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection