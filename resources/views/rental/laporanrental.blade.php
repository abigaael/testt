 @extends('layouts.newapp')
 @push('style')
  <link href="{{asset('template/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('template/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('template/assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <link href="{{ asset('template/assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css" media="screen">
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
   @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
 @endif

 <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- MODAL STICK UP  -->
          <div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header clearfix ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                  </button>
                  <h4 class="p-b-5"><span class="semi-bold">Laporan Rental Mobil</span>
                </div>
                <div class="modal-body">
                  <p class="small-text">Masukkan data</p>
                  <form role="form" id="form-createrental" action="{{ url('/rental/create') }}" method="post">
                  {{csrf_field()}}
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>No Transaksi</label>
                          <input name="no_transaksi" type="text" class="form-control" placeholder="Masukkan no transaksi">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Nama Customer</label>
                          <select name="nama_customer" class="form-control">
                            <option>Pilih Customer</option>
                              @foreach($data_customer as $customer)
                                <option value="{{ $customer->kode_customer }}">
                                  {{ $customer->nama_customer }}
                                </option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                       <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Nama Mobil</label>
                          <select name="car_name" class="form-control">
                            <option>Pilih mobil</option>
                              @foreach($data_mobil as $mobil)
                                <option value="{{ $mobil->kode_mobil }}">
                                  {{ $mobil->car_name }}
                                </option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <!--  <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Kode Mobil</label>
                          <input name="kode_mobil" type="text" class="form-control" placeholder="Masukkan kode mobil">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>No Polisi</label>
                          <input name="no_polisi" type="text" class="form-control" placeholder="Masukkan no polisi">
                        </div>
                      </div>
                    <!-- </div> --> 
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Tanggal Rental</label>
                          <input name="tgl_rental" type="text" class="form-control" placeholder="Masukkan tanggal rental">  
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Tanggal Kembali</label>
                          <input name="tgl_kembali" type="text" class="form-control" placeholder="Masukkan tanggal kembali">  
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Harga sewa</label>
                          <input name="harga_sewa" type="text" class="form-control" placeholder="Masukkan harga sewa" onkeypress="validateOnlyNumber(event);">  
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button id="add-app" type="submit" class="btn btn-primary  btn-cons">Add</button>
                      <button type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
                
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div> 
       <div class=" container-fluid   container-fixed-lg bg-white">
 <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg bg-white">
       <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg bg-white">
            <h1 align="center">Laporan Rental Mobil</h1>
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                </div>
                <div class="pull-left">
                 <div class="col-xs-12">
                    <button id="show-modal" class="btn btn-primary btn-cons" data-toggle="modal" data-target="#addNewAppModal"><i class="fa fa-plus"></i> Tambah Data
                    </button>
                  </div>
                  </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-block">
                <table class="table table-hover demo-table-search table-responsive" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th>No Transaksi</th>
                      <th>Nama Customer</th>
                      <th>Nama Mobil</th>
                      <th>Kode Mobil</th>
                      <th>No Polisi</th>
                      <th>Tgl Rental</th>
                      <th>Tgl Kembali</th>
                      <th>Harga sewa</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No Transaksi</th>
                      <th>Nama Customer</th>
                      <th>Nama Mobil</th>
                      <th>Kode Mobil</th>
                      <th>No Polisi</th>
                      <th>Tgl Rental</th>
                      <th>Tgl Kembali</th>
                      <th>Harga sewa</th>
                      <th></th>
                    </tr> 
                  </tfoot>
                  <tbody>
                    @foreach($data_rental as $rental)
                    <tr>
                      <td>{{$rental->no_transaksi}}</td>
                      <td>{{ $rental->customer ? $rental->customer->nama_customer : '-' }}</td>
                      <td>{{$rental->mobil->car_name}}</td>
                      <td>{{$rental->mobil->kode_mobil}}</td>
                      <td>{{$rental->mobil->no_polisi}}</td>
                      <td>{{$rental->tgl_rental}}</td>
                      <td>{{$rental->tgl_kembali}}</td>
                      <td>{{ number_format($mobil->harga_sewa,2,",",".")}}</td>
                      <td>
                        <a href="/rental/{{$rental->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        &nbsp;&nbsp;
                        <a href="/rental/{{$rental->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>
          <!-- END CONTAINER FLUID -->
@endsection
@push('script')
    <script src="{{asset('template/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('template/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('template/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('template/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('template/assets/plugins/datatables-responsive/js/datatables.responsive.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/plugins/datatables-responsive/js/lodash.min.js')}}"></script>
    <script src="{{asset('template/assets/js/datatables.js')}}" type="text/javascript"></script>
    <script src="{{ asset('template/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('template/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

      $(document).ready(function() {
          // Setup - add a text input to each footer cell
          $('#tableWithSearch tfoot th').each( function () {
              var title = $(this).text();
              $(this).html( '<input type="text" placeholder=" '+title+'" />' );
          } );
       
          // DataTable
          var table = $('#tableWithSearch').DataTable();
       
          // Apply the search
          table.columns().every( function () {
              var that = this;
       
              $( 'input', this.footer() ).on( 'keyup change clear', function () {
                  if ( that.search() !== this.value ) {
                      that
                          .search( this.value )
                          .draw();
                  }
              } );
          } );

          $('[name="tgl_rental"]').datepicker({
            format: "yyyy-mm-dd"
          });
          $('[name="tgl_kembali"]').datepicker({
            format: "yyyy-mm-dd"
          });

          $("#form-createrental").validate({
            rules: {
              no_transaksi: {
                    required:true,
                    remote:{
                              url:"{{ ('/transaction') }}",
                              type:"get",
                    },
              },
              nama_customer:"required",
              car_name:"required",
              tgl_rental:"required",
              tgl_kembali:"required",
              harga_sewa:"required",
            },
            messages: {
              no_transaksi: {
                  required:"Please enter your transaction number",
                  remote:"Please input another transaction number",
              },
              car_name: "Please enter your car name",
              nama_customer: "Please enter name customer",
              tgl_rental: "Please enter your rental date",
              tgl_kembali: "Please enter your back date",
              harga_sewa: "Please enter price",
            }
          });

      } );
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