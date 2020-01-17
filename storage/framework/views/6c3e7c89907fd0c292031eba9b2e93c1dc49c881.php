 
 <?php $__env->startPush('style'); ?>
 <link href="<?php echo e(asset('template/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template/assets/plugins/datatables-responsive/css/datatables.responsive.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
  tfoot {
      display: table-header-group;
  }
</style>
 <?php $__env->stopPush(); ?>
 <?php $__env->startSection('content'); ?>
   <?php if(session('sukses')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(session('success')); ?>

    </div>
 <?php endif; ?>
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
                  <h4 class="p-b-5"><span class="semi-bold">Data Mobil</span>
                </div>
                <div class="modal-body">
                  <p class="small-text">Masukkan data</p>
                  <form role="form" action="<?php echo e(url('/mobil/create')); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Kode</label>
                          <input name="kode_mobil" type="text" class="form-control" placeholder="Masukkan kode">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Nama Mobil</label>
                          <input name="car_name" type="text" class="form-control" placeholder="Masukkan nama mobil">
                        </div>
                      </div>
                    </div>
                      <div class="row">
                       <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Nomor polisi</label>
                          <input name="no_polisi" type="text" class="form-control" placeholder="Masukkan nomor polisi">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Brand</label>
                          <input name="brand" type="text" class="form-control" placeholder="Masukkan brand">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Type</label>
                          <input name="type" type="text" class="form-control" placeholder="Masukkan type mobil">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Warna</label>
                          <input name="warna" type="text" class="form-control" placeholder="Masukkan warna mobil">  
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Harga sewa</label>
                          <input name="harga_sewa" type="text" class="form-control" placeholder="Masukkan harga sewa">  
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
            <h1 align="center">List Mobil</h1>
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
                      <th>Kode</th>
                      <th>Nama Mobil</th>
                      <th>No Polisi</th>
                      <th>Brand</th>
                      <th>Type</th>
                      <th>Warna</th>
                      <th>Harga sewa</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Kode</th>
                      <th>Nama Mobil</th>
                      <th>No Polisi</th>
                      <th>Brand</th>
                      <th>Type</th>
                      <th>Warna</th>
                      <th>Harga sewa</th>
                      <th>Aksi</th>
                    </tr> 
                  </tfoot>
                  <tbody>
                    <?php $__currentLoopData = $data_mobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($mobil->kode_mobil); ?></td>
                      <td><?php echo e($mobil->car_name); ?></td>
                      <td><?php echo e($mobil->no_polisi); ?></td>
                      <td><?php echo e($mobil->brand); ?></td>
                      <td><?php echo e($mobil->type); ?></td>
                      <td><?php echo e($mobil->warna); ?></td>
                      <td><?php echo e(number_format($mobil->harga_sewa,2,",",".")); ?></td>
                      <td>
                        <a href="/mobil/<?php echo e($mobil->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                        &nbsp;&nbsp;
                        <a href="/mobil/<?php echo e($mobil->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>
          <!-- END CONTAINER FLUID -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/assets/plugins/datatables-responsive/js/datatables.responsive.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/assets/plugins/datatables-responsive/js/lodash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/js/datatables.js')); ?>" type="text/javascript"></script>

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
      } );

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\file\resources\views/mobil/listmobil.blade.php ENDPATH**/ ?>