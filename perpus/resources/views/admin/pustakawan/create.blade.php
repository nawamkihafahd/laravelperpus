@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah pustakawan</div>

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
					<form action= "{{ route('admin.pustakawan.store') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="Nama">Nama: </label>
							<input type="text" class="form-control" id="Nama" name="nama" placeholder="Nama*"></input>
						</div>
						<br>
						<div class="form-group">
							<label for="Alamat">Alamat: </label>
							<input type="text" class="form-control" id="Alamat" name="alamat" placeholder="Alamat*"></input>
						</div>
						<br>
						<div class="form-group">
							<label for="Notelp">Nomor Telepon: </label>
							<input type="text" class="form-control" id="Notelp" name="notelp" placeholder="Nomor Telepon*"></input>
						</div>
						<div class="form-group">
							<label for="Notelp">Bagian Pekerjaan: </label>
							<select class="form-control" id="jobdesc" name="jobdesc_id"></input>
								<option value="null">Please select Job Description</option>
								@foreach ($jobdescs as $jobDesc)
									<option value="{{ $jobDesc->id }}">{{ $jobDesc->name }}</option>
								@endforeach
							</select>
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