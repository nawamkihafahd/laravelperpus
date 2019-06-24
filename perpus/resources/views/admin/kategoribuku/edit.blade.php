@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Jenis Pekerjaan
					<form action= "{{ route('admin.bookcategory.update', $model->id) }}" method="post">
						{{ csrf_field() }}
						{{ method_field('put') }}
						<div class="form-group">
							<label for="Nama">Nama Kategori: </label>
							<input type="text" class="form-control" id="Nama" name="nama" value="{{ $model->nama }}"></input>
						</div>
						<br>
						<br>
						<button type="submit" class="btn btn-primary">Ubah</input>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection