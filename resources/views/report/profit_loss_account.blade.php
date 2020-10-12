
@extends('master')

@section('breadcrumb-title', 'Profit & Loss Account Information')

@section('content')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css.trading_account.css') }}">
@endsection

<section class="content">

  <div class="card card-success card-outline">
    <div class="card-header">
        <h3 class="card-title">All 'Profit & Loss Account Information</h3>
        <!-- <a href="{{route('showAddItem')}}" class="btn btn-default float-sm-right"><i class="fas fa-plus"></i> Add Item</a> -->

        @include('message')

    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-7">
                  <h4>
                    <strong class="float-right">Noboudoy Purbacha City</strong><br>
                    <strong class="float-right">Financial Year 2019-2020</strong><br>
                    <strong class="float-right">Profit & Loss Information</strong>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
             
              <!-- title row -->
              <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- Main content -->
              <!-- title row -->
              
              <!-- info row -->
             
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Particulares</th>
                      <th>TK</th>
                      <th>Particulares</th>
                      <th>TK</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td>Balance C/D</td>
                      <td>6443433443.50</td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Gift & Speed Money</td>
                      <td>455-981-221</td>
                      <td></td>
                      <td></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              
           
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



            </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection

@section('custom_js')
<script>
//     $(document).ready(function() {
//     $('#all-item').DataTable( {
//         // scrollY:        '50vh',
//         // scrollCollapse: true,
//         "responsive": true,
//       "autoWidth": false,
//     } );
// } );


//delete 
</script>
@endsection

