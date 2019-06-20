@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Buku
					
					<form action= "{{ route('admin.book.update', $model->id) }}" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
						{{ method_field('put') }}
						<div class="form-group">
							<label for="Judul">Judul: </label>
							<input type="text" class="form-control" id="Judul" name="judul" value="{{ $model->judul }}"></input>
						</div>
						<br>
						<div class="form-group">
							<label for="Pengarang">Pengarang: </label>
							<input type="text" class="form-control" id="Pengarang" name="pengarang" value="{{ $model->pengarang }}"></input>
						</div>
						<br>
						<div class="form-group">
							<label for="coverurl">Gambar Cover: </label>
							<br>
							<img src="{{ asset($model->showImage()) }}" style="width:200px;height:200px;">
							<br>
							<input type="file" class="form-control" id="coverurl" name="coverurl">
						</div>
						<br>
						<div class="form-group">
							<label for="FileBuku">File: </label>
							<br>
							<a class="btn btn-info" href="{{ asset($model->showFile()) }}">Lihat File Yang Sudah Ada</a>
							<br>
							<input type="file" class="form-control" id="FileBuku" name="fileurl">
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Ubah</input>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection