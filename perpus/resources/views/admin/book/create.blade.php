@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Buku</div>

                <div class="card-body">
                    
					@if (count($errors) > 0)
						<div class="alert alert-danget">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form action= "{{ route('admin.book.store') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="Judul">Judul: </label>
							<input type="text" class="form-control" id="Judul" name="judul" placeholder="Nama*"></input>
						</div>
						<br>
						<div class="form-group">
							<label for="Pengarang">Pengarang: </label>
							<input type="text" class="form-control" id="Pengarang" name="pengarang" placeholder="Alamat*"></input>
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