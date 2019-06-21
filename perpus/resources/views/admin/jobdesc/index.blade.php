@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Jenis Pekerjaan
					<a class="btn btn-info" href= "{{ route('admin.jobdesc.create') }}">Tambah</a>
					<table class="table table-striped table-dark">
						<tr>
							<th>Nama Pekerjaan</th>
							<th>Gaji</th>
							<th></th>
						</tr>
						@foreach($jobdescs as $jobdesc)
						<tr>
							<td>{{ $jobdesc->name }}</td>
							<td>Rp.{{ $jobdesc->salary }},-</td>
							<td><a class="btn btn-info" href= "{{ route('admin.jobdesc.show', $jobdesc->id) }}">Lihat</a></td>
							
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection