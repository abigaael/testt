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
				
			
			<form action="/rental/{{$rental->id}}/update" method="POST">
				        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">No Transaksi</label>
							    <input name="no_transaksi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="No Transaksi" value="{{$rental->no_transaksi}}">
							  </div>

							   <div class="form-group">
							    <label for="exampleInputEmail1">Nama Customer</label>
							    <select class="form-control" name="nama_customer">
							    	<option value="{{$rental->kode_customer}}">{{ $rental->customer->nama_customer }}</option>
							    	@foreach($customer as $cust)
							    		@if($cust->kode_customer !== $rental->kode_customer)
							    			<option value="{{ $cust->kode_customer }}"> {{ $cust->nama_customer }} </option>
							    		@endif 
							    	@endforeach
							    </select>
							   </div>
							    
							   <div class="form-group">
							    <label for="exampleInputEmail1">Nama Mobil</label>
							    <select class="form-control" name="car_name">
							    	<option value="{{$rental->kode_mobil}}">{{ $rental->mobil->car_name }}</option>
							    	@foreach($mobil as $mob)
							    		@if($mob->kode_mobil !== $rental->kode_mobil)
							    			<option value="{{ $mob->kode_mobil }}"> {{ $mob->car_name }} </option>
							    		@endif 
							    	@endforeach
							    </select>
							   </div> 

							   <!-- <div class="form-group">
							    <label for="exampleInputEmail1">Kode Mobil</label>
							    <input name="kode_mobil" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Kode Mobil" value="{{$rental->kode_mobil}}">

							   <div class="form-group">
							    <label for="exampleInputEmail1">No Polisi</label>
							    <input name="no_polisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="No Polisi" value="{{$rental->no_polisi}}"> 
 -->
							   <div class="form-group">
							    <label for="exampleInputEmail1">Tanggal rental</label>
							    <input name="tgl_rental" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Tgl rental" value="{{$rental->tgl_rental}}">
							   </div> 

							   <div class="form-group">
							    <label for="exampleInputEmail1">Tanggal kembali</label>
							    <input name="tgl_kembali" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Tgl kembali" value="{{$rental->tgl_kembali}}"> 
							   </div>

							  <!--  <div class="form-group">
							    <label for="exampleInputEmail1">Harga Sewa</label>
							    <input name="harga_sewa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Harga Sewa" value="{{$rental->harga_sewa}}"> 
 -->
							    
							
					<button type="submit" class="btn btn-warning">Update</button>
				        </form>
				</div>
		</div>
@endsection
@push('script')
<script type="text/javascript">
	$('[name="tgl_rental"]').datepicker({
	  format: "dd-mm-yyyy"
	});
	$('[name="tgl_kembali"]').datepicker({
	  format: "dd-mm-yyyy"
	});
</script>
@endpush