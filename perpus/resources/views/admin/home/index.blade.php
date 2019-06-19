@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Welcome
					<br>
					<a class="btn btn-info" href="{{ route('admin.book.index')}}">Books</a>
					<br>
					<br>
					<a class="btn btn-info" href="{{ route('admin.pelanggan.index')}}">Pelanggan</a>
					<br>
					<br>
					<a class="btn btn-info" href="{{ route('admin.pustakawan.index')}}">Pustakawan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection