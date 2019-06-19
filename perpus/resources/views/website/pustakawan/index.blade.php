@extends('website.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Pustakawan
					<br>
					<table class="table table-striped table-dark">
						<tr>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telepon</th>
						</tr>
						@foreach($pustakawans as $pustakawan)
						<tr>
							<td>{{ $pustakawan->nama }}</td>
							<td>{{ $pustakawan->alamat }}</td>
							<td>{{ $pustakawan->notelp }}</td>
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection