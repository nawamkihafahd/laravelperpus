@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Jenis Pekerjaan
					<form action= "{{ route('admin.jobdesc.update', $model->id) }}" method="post">
						{{ csrf_field() }}
						{{ method_field('put') }}
						<div class="form-group">
							<label for="Nama">Nama Pekeraan: </label>
							<input type="text" class="form-control" id="Nama" name="name" value="{{ $model->name }}"></input>
						</div>
						<br>
						<div class="form-group">
							<label for="Gaji">Gaji: </label>
							<input type="number" class="form-control" id="Gaji" name="salary" value="{{ $model->salary }}"></input>
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