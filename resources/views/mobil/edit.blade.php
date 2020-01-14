@extends('layouts.newapp')

@section('content')
		<h1>Edit Data Rental Mobil</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  Data Entered Successfully!
			</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
				
			
			<form action="/mobil/{{$mobil->id}}/update" method="POST">
				        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">Kode</label>
							    <input name="kode_mobil" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Kode" value="{{$mobil->kode_mobil}}">

							   <div class="form-group">
							    <label for="exampleInputEmail1">Nama Mobil</label>
							    <input name="car_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Nama Mobil" value="{{$mobil->car_name}}">
							    
							   <div class="form-group">
							    <label for="exampleInputEmail1">No Polisi</label>
							    <input name="no_polisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="No Polisi" value="{{$mobil->no_polisi}}"> 

							   <div class="form-group">
							    <label for="exampleInputEmail1">Brand</label>
							    <input name="brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Brand" value="{{$mobil->brand}}">

							   <div class="form-group">
							    <label for="exampleInputEmail1">Type</label>
							    <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Type" value="{{$mobil->type}}"> 

							   <div class="form-group">
							    <label for="exampleInputEmail1">Harga Sewa</label>
							    <input name="harga_sewa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Harga Sewa" value="{{$mobil->harga_sewa}}"> 

							    
				</div>
					<button type="submit" class="btn btn-warning">Update</button>
				        </form>
				</div>
		</div>
@endsection