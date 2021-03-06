
@extends('master')

@section('breadcrumb-title', 'Add Vendor Information')

@section('content')

<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Add Vendor Information</h3>
        </div>

         @include('message')
        <!-- /.card-header -->
        <form action="{{ route('storeVendor') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Name">
                      @if($errors->has('name'))
                          <strong class="text-danger">{{ $errors->first('name') }}</strong>
                      @endif
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Company Name</label>
                          <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                            @if($errors->has('company_name'))
                                <strong class="text-danger">{{ $errors->first('company_name') }}</strong>
                            @endif
                      </div>
                  </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label>Phone</label>
                      <input type="number" name="phone" class="form-control" placeholder="Phone">
                        @if($errors->has('phone'))
                            <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                        @endif
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    @if($errors->has('email'))
                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                    @endif
                </div>
            </div>

          <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" id="address" cols="3" rows="3" class="form-control" placeholder="Address"></textarea>
                          @if($errors->has('address'))
                              <strong class="text-danger">{{ $errors->first('address') }}</strong>
                          @endif
                    </div>
                </div>

          <div class="col-md-6">
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="description" cols="3" rows="3" class="form-control" placeholder="Description"></textarea>
                @if($errors->has('description'))
                    <strong class="text-danger">{{ $errors->first('description') }}</strong>
                @endif
            </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
              <label>Website</label>
              <input type="text" name="website" class="form-control" placeholder="Website">
              @if($errors->has('website'))
                  <strong class="text-danger">{{ $errors->first('website') }}</strong>
              @endif
          </div>
      </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <div class="card-footer">
                 <button type="submit" class="btn btn-success ">Submit</button>
                 <a href="{{ route('allVendor') }}" type="submit" class="btn btn-info">Back</a>
              </div>
        </form>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  @endsection