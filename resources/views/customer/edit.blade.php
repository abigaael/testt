@extends('layouts.newapp')

@push('script')
	<style type="text/css">
	  tfoot {
	      display: table-header-group;
	  }
	  .form-group.required label:after {
	    content:"*";
	    color:red;
	}
	</style>
@endpush

@section('content')
	<h1>Edit Data Customer</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  Data Entered Successfully!
			</div>
		@endif
		
		<div class="row">
			<div class="col-lg-12">
				<form action="/customer/{{$customer->id}}/update" id="editcust" method="POST">
				    {{csrf_field()}}
							  
							  <div class="form-group form-group-default required">
							    <label for="kode_customer">Kode</label>
							    <input name="kode_customer" type="text" class="form-control" id="kode_customer" aria-describedby="emailHelp" placeholde="Kode" value="{{$customer->kode_customer}}">
							  </div>

							  <div class="form-group form-group-default required">
							    <label for="nama_customer">Nama Customer</label>
							    <input name="nama_customer" type="text" class="form-control" id="nama_customer" aria-describedby="emailHelp" placeholde="Nama Customer" value="{{$customer->nama_customer}}">
							  </div>

							  <div class="form-group form-group-default required">
							    <label for="email">Email</label>
							    <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholde="Email" value="{{$customer->email}}">
							  </div>
							    
							  <div class="form-group form-group-default required">
							    <label for="no_hp">No Hp</label>
							    <input name="no_hp" type="text" class="form-control" id="no_hp" aria-describedby="emailHelp" placeholde="No Hp" onkeypress="validateOnlyNumber(event);" value="{{$customer->no_hp}}"> 
							  </div>

							  <div class="form-group form-group-default required">
							    <label for="exampleInputEmail1">Jenis Kelamin</label><br>
								   @if($customer->jenis_kelamin == "L")
								       <input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki<br>
								       <input type="radio" name="jenis_kelamin" value="P"> Perempuan<br>
								     @else
								       <input type="radio" name="jenis_kelamin" value="L"> Laki-laki<br>
								       <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan<br>
								   @endif
							  </div>
							   
							  <div class="form-group form-group-default required">
							    <label for="exampleInputEmail1">Alamat</label>
							    <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholde="Alamat" value="{{$customer->alamat}}"> 
							  </div>
					<button type="submit" class="btn btn-warning">Update</button>
				        </form>
				</div>
		</div>
@endsection

@push('script')
<script src="{{ asset('template/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
	$("#editcust").validate({
            rules: {
              email:{
                    required: true,
                    email: true
              }, 
              nama_customer: "required",
              jenis_kelamin:"required",
              alamat:"required",
              no_hp:"required",
              kode_customer:"required",
            },
            messages: {
              nama_customer: "Please enter name customer",
              email: {
                    required:"Please enter your email address to contact you",
                    email:"Your email address must be in the format of name @"
              },
              alamat: "Please enter your address",
              no_hp: "Please input your mobile number",
              kode_customer: "Please enter your code",
            }
          });

	function validateOnlyNumber(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9\b]|\./;
         
        if( !regex.test(key) ) {
          theEvent.returnValue = false;
          if(theEvent.preventDefault) theEvent.preventDefault();
          }
      }
</script>
@endpush