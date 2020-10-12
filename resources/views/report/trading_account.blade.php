
@extends('master')

@section('breadcrumb-title', 'Trading Account Information')

@section('content')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css.trading_account.css') }}">
@endsection

<section class="content">

  <div class="card card-success card-outline">
    <div class="card-header">
        <h3 class="card-title">All Trading Account Information</h3>
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
                    <strong class="float-right">Trading Account Information</strong>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
             
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                     <small>David</small>
                    <small class="float-right">Credit</small>
                  </h4>
                </div>
              </div>
              
              <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                      <!-- Main content -->
                   
                        <div class="row">
                          <!-- accepted payments column -->
                          <div class="col-6">
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK 454745747</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK 3434344</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK 4343343</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK 43433443</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK 43434343</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK 43433433</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK 434343343</p>
                             <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK (434343343)</p><hr style="width:100px; flot:left;margin-left: 260px; border-bottom: 1px; color:black;" class="style3"><br>
                              <p style="font-size: 18px !important;
    line-height:2px !important;" class="leadss">Total(head wise expenditure) TK 434343343</p>
                          </div>
                          <!-- /.col -->
                          <div class="col-6">
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss flot-right">Particular(head wise expenditure) TK 454745747</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss flot-right">Particular(head wise expenditure) TK 454745747</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss flot-right">Particular(head wise expenditure) TK 454745747</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss flot-right">Particular(head wise expenditure) TK 454745747</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss flot-right">Particular(head wise expenditure) TK 454745747</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss flot-right">Particular(head wise expenditure) TK 454745747</p>
                            <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss flot-right">Particular(head wise expenditure) TK 454745747</p>
                             <p style="font-size: 18px !important;
    line-height:8px !important;" class="leadss">Particular(head wise expenditure) TK (434343343)</p><hr style="width:100px; flot:left;margin-left: 260px; border-bottom: 1px; color:black;" class="style3"><br>
                             <p style="font-size: 18px !important;
    line-height:2px !important;" class="leadss">Total(head wise expenditure) TK 434343343</p>
                          </div>
                          <!-- /.col -->
                        </div>
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        
                      
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

