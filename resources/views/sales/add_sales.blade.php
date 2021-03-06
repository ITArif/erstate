
@extends('master')

@section('breadcrumb-title', 'Add Sell Information')

@section('content')

<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Add Sell Information</h3>
        </div>

         @include('message')
        <!-- /.card-header -->
        <form action="{{ route('storeSales') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Customer Name</label>
                          <select name="customer_name" id="" class="form-control">
                            <option value="">--select--</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                          </select>
                          @if($errors->has('customer_name'))
                              <strong class="text-danger">{{ $errors->first('customer_name') }}</strong>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Project Name</label>
                            <select name="project_name" id="" class="form-control">
                              <option value="">--select--</option>
                              @foreach ($projects as $project)
                                  <option value="{{ $project->id }}">{{ $project->name }}</option>
                              @endforeach
                            </select>
                            @if($errors->has('project_name'))
                                <strong class="text-danger">{{ $errors->first('project_name') }}</strong>
                            @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Product Name</label>
                          <select name="product_name" id="" class="form-control">
                            <option value="">--select--</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->id }}</option>
                            @endforeach
                          </select>
                          @if($errors->has('product_name'))
                              <strong class="text-danger">{{ $errors->first('product_name') }}</strong>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Employee Name</label>
                          <select name="employee_name" id="" class="form-control">
                            <option value="">--select--</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                          </select>
                          @if($errors->has('employee_name'))
                              <strong class="text-danger">{{ $errors->first('employee_name') }}</strong>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Sells Date</label>
                            <input type="date" name="sales_date" id="sales_date" class="form-control" placeholder="Sells Date">
                            @if($errors->has('sales_date'))
                                <strong class="text-danger">{{ $errors->first('sales_date') }}</strong>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Status</label>
                          <select name="status" id="" class="form-control">
                            <option value="">--select--</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                          </select>
                          @if($errors->has('sales_date'))
                              <strong class="text-danger">{{ $errors->first('sales_date') }}</strong>
                          @endif
                      </div>
                  </div>

                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="address" cols="3" rows="3" class="form-control" placeholder="Description"></textarea>
                            @if($errors->has('description'))
                                <strong class="text-danger">{{ $errors->first('description') }}</strong>
                            @endif
                        </div>
                    </div>

                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <div class="card-footer">
                 <button type="submit" class="btn btn-success ">Submit</button>
                 <a href="{{ route('allSales') }}" type="submit" class="btn btn-info">Back</a>
              </div>
        </form>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  @endsection

@section('custom_js')

<script>
    $(document).ready(function() {
      $(function() { 
        $( "#hand_over_date" ).datepicker();
     });
    });
</script>
    
@endsection