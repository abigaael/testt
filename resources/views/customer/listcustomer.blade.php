 @extends('layouts.newapp')
 @section('content')
 <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">List Customer
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
                      <th>Nama Customer</th>
                      <th>No Hp</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
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
                        <p>081370598880</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Pria</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Jl. Sancang Dalam</p>
                      </td>
                      
                      

                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>A123</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Niall Horan</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>085262732426</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Pria</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>Jl. Lodaya II</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>
          <!-- END CONTAINER FLUID -->
@endsection