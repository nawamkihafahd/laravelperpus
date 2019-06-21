@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Pelanggan
					
					<form action= "{{ route('admin.pustakawan.update', $model->id) }}" method="post">
						{{ csrf_field() }}
						{{ method_field('put') }}
						<div class="form-group">
							<label for="Nama">Nama: </label>
							<input type="text" class="form-control" id="Nama" name="nama" value="{{ $model->nama }}"></input>
						</div>
						<br>
						<div class="form-group">
							<label for="Alamat">Alamat: </label>
							<input type="text" class="form-control" id="Alamat" name="alamat" value="{{ $model->alamat }}"></input>
						</div>
						<br>
						<div class="form-group">
							<label for="Notelp">Nomor Telepon: </label>
							<input type="text" class="form-control" id="Notelp" name="notelp" value="{{ $model->notelp }}"></input>
						</div>
						<div class="form-group">
							<label for="Notelp">Bagian Pekerjaan: </label>
							<select class="form-control" id="jobdesc" name="jobdesc_id"></input>
								<option value="{{ $model->jobdesc_id or null}}">{{ $model->jobdesc ? $model->jobdesc->name : 'Please select Job Description' }}</option>
								@foreach ($jobdescs as $jobDesc)
									<option value="{{ $jobDesc->id }}">{{ $jobDesc->name }}</option>
								@endforeach
							</select>
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