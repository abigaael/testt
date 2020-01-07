 
 <?php $__env->startSection('content'); ?>
 <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">List Laporan Rental Mobil
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-block">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th>No Transaksi</th>
                      <th>Nama Customer</th>
                      <th>Nama mobil</th>
                      <th>Kode Mobil</th>
                      <th>No polisi</th>
                      <th>Tgl Rental</th>
                      <th>Tgl Kembali</th>
                      <th>Harga Sewa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>A123</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Harry Styles</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Avanza</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>A123</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>BK123EL</p>
                      </td>

                      <td class="v-align-middle">
                        <p>5 Januari 2020</p>
                      </td>

                      <td class="v-align-middle">
                        <p>6 Januari 2020</p>
                      </td>

                      <td class="v-align-middle">
                        <p>Rp 200.000</p>
                      </td>
                      
                      
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>A123</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Niall Horan</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Avanza</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>A123</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>BK123EL</p>
                      </td>

                      <td class="v-align-middle">
                        <p>5 Januari 2020</p>
                      </td>

                      <td class="v-align-middle">
                        <p>6 Januari 2020</p>
                      </td>

                      <td class="v-align-middle">
                        <p>Rp 200.000</p>
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>
          <!-- END CONTAINER FLUID -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\file\resources\views/rental/laporanrental.blade.php ENDPATH**/ ?>