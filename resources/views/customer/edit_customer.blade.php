
@extends('master')

@section('breadcrumb-title', 'Edit Customer Information')

@section('content')

<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Edit Customer Information</h3>
        </div>

         @include('message')
        <!-- /.card-header -->
        <form action="{{route('updateCustomer',$customer->id)}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                  <!-- /.col -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Name" value="{{$customer->name}}">
                            @if($errors->has('name'))
                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                            @endif                    
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Father Spouse</label>
                          <input type="text" name="father_spouse" class="form-control" placeholder="Father Spouse" value="{{$customer->father_spouse}}">
                            @if($errors->has('father_spouse'))
                                <strong class="text-danger">{{ $errors->first('father_spouse') }}</strong>
                            @endif
                      </div>
                  </div>


              <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{$customer->email}}">
                      @if($errors->has('email'))
                          <strong class="text-danger">{{ $errors->first('email') }}</strong>
                      @endif
                </div>
            </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label>Phone</label>
                      <input type="number" name="phone" class="form-control" placeholder="Phone" value="{{$customer->phone}}">
                        @if($errors->has('phone'))
                            <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                        @endif
                  </div>
              </div>


          <div class="col-md-6">
            <div class="form-group">
                <label>Perment Address</label>
                <textarea name="permanent_address" id="permanent_address" cols="3" rows="3" class="form-control" placeholder="Perment Address">{{$customer->permanent_address}}</textarea>
                @if($errors->has('perment_address'))
                    <strong class="text-danger">{{ $errors->first('permanent_address') }}</strong>
                @endif
            </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
              <label>Address</label>
              <textarea name="address" id="perment_address" cols="3" rows="3" class="form-control" placeholder="Address">{{$customer->address}}</textarea>
                @if($errors->has('address'))
                    <strong class="text-danger">{{ $errors->first('address') }}</strong>
                @endif
          </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
            <label>NID</label>
            <input type="number" name="nid" class="form-control" placeholder="NID" value="{{$customer->nid}}">
            @if($errors->has('nid'))
                <strong class="text-danger">{{ $errors->first('nid') }}</strong>
            @endif
        </div>
    </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <div class="card-footer">
                 <button type="submit" class="btn btn-success ">Update</button>
                 <a href="{{ route('allCustomer') }}" type="submit" class="btn btn-info">Back</a>
              </div>
        </form>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  @endsection
