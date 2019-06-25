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
						
						<!--
						<script>
							function filterinput(x) {
								var cbox, sval, inpvalues;
								sval=$('#CategorySearchBar').val().toUpperCase()	;
								cbox=document.getElementById("categorycheckbox");
								console.log(cbox);
								inpvalues = cbox.getElementsByTagName("input");
								lblvalues = cbox.getElementsByTagName("label");
								for (i = 0; i < inpvalues.length; i++) {
									console.log(inpvalues[i]);
									console.log(lblvalues[i]);
									textval = lblvalues[i].textContent || lblvalues[i].innerText;
									console.log("textval:")
									console.log(textval)
									if(textval.toUpperCase().indexOf(sval) > -1)
									{
										inpvalues[i].style.display = "";
										lblvalues[i].style.display = "";
									}
									else
									{
										inpvalues[i].style.display = "none";
										lblvalues[i].style.display = "none";
									}
								}
							}
						</script>
						<div class="form-group">
							<h6>Kategori: </h6>
							<input id="CategorySearchBar" placeholder="Search for categories.." type="text" oninput="filterinput(this)">
							<br>
							<br>
							<div id="categorycheckbox">
							@foreach ($bookcategories as $bookcategory)
								@if (($loop->index % 4) == 0)
								<div class="row">
								@endif
									<div class="col-md-3">
										<input type="checkbox" id="categoryids" name="categoryids[]" value="{{ $bookcategory->id }}"><label>{{ $bookcategory->nama }} </label>
									</div>
								@if (($loop->index % 4) == 3)
								</div>
								<br>
								@endif
							@endforeach
							</div>
						</div>
						-->
						<div class="card">
							<div class="card-body">
								<div class="card-header">
									<h6>Kategori yang terpilih:</h6>
								</div>
								<div id="categoryformarea">
								<div id="selectedcategoryarea">
								</div>
								<br>
								<div class="form-group">
									<input type="hidden" name="id" value="null">
										<select class="form-control" id="jobdesc" name="categoryid"></input>
											@foreach ($bookcategories as $bookcategory)
												<option value="{{ $bookcategory->id }}">{{ $bookcategory->nama }}</option>
											@endforeach
										</select>
								</div>
								<button type="button" onclick="createcategory()" class="btn btn-primary">Tambah kategori</button>
								
								</div>
							</div>
						</div>
						
						
						<br>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection