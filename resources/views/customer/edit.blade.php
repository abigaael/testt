@extends('layouts.newapp')

@section('content')
		<h1>Edit Data Customer</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  Data Entered Successfully!
			</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
				
			
			<form action="/customer/{{$customer->id}}/update" method="POST">
				        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">Kode</label>
							    <input name="kode_customer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Kode" value="{{$customer->kode_customer}}">
							   </div>

							   <div class="form-group">
							    <label for="exampleInputEmail1">Nama Customer</label>
							    <input name="nama_customer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Nama Customer" value="{{$customer->nama_customer}}">
							   </div>

							   <div class="form-group">
							    <label for="exampleInputEmail1">Email</label>
							    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Email" value="{{$customer->email}}">
							   </div>
							    
							   <div class="form-group">
							    <label for="exampleInputEmail1">No Hp</label>
							    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="No Hp" value="{{$customer->no_hp}}"> 
							   </div>

							   <div class="form-group">
							    <label for="exampleInputEmail1">Jenis Kelamin</label><br>
								   @if($customer->jenis_kelamin == "L")
								       <input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki<br>
								       <input type="radio" name="jenis_kelamin" value="P"> Perempuan<br>
								     @else
								       <input type="radio" name="jenis_kelamin" value="L"> Laki-laki<br>
								       <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan<br>
								   @endif
							   </div>
							   
							   <div class="form-group">
							    <label for="exampleInputEmail1">Alamat</label>
							    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Alamat" value="{{$customer->alamat}}"> 
							   </div>
					<button type="submit" class="btn btn-warning">Update</button>
				        </form>
				</div>
		</div>
@endsection