 
 <?php $__env->startSection('content'); ?>
 <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">List Mobil
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
                      <th>Kode</th>
                      <th>Nama Mobil</th>
                      <th>No Polisi</th>
                      <th>Brand</th>
                      <th>Type</th>
                      <th>Warna</th>
                      <th>Harga sewa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>A123</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Avanza</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>BK1234EL</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Toyota</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Manual</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Hitam</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Rp 100.000/jam</p>
                      </td>
                    </tr>

                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>A123</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Avanza</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>BK1234EL</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Toyota</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Manual</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Hitam</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Rp 100.000/jam</p>
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
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\file\resources\views/mobil/listmobil.blade.php ENDPATH**/ ?>