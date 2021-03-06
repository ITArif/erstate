
@extends('master')

@section('breadcrumb-title', 'All Employee Information')

@section('content')

<section class="content">

  <div class="card card-success card-outline">
    <div class="card-header">
        <h3 class="card-title">All Employee Information</h3>
        <a href="{{route('showAddEmployee')}}" class="btn btn-default float-sm-right"><i class="fas fa-plus"></i> Add Employee</a>

        @include('message')

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="all-employee" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>SL NO</th>
              <th>Name</th>
              <th>Position</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>NID</th>
              <th>Department</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($employees as $employee)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->nid }}</td>
                <td>{{ $employee->department }}</td>
                <td>
                  <div style="width: 150px; display: block;">
                    <a href="{{ route('editEmployee',$employee->id) }}" class="btn btn-warning" title="Edit"><i class="far fa-edit"></i></a>
                    <a href="{{ route('deleteEmployee',$employee->id) }}" class="btn btn-danger" title="Delete"><i class="far fa-trash-alt"></i></a>
                  </div>
                </td>
            </tr>
              @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection

@section('custom_js')
<script>
    $(document).ready(function() {
    $('#all-employee').DataTable( {
        "info": true,
          "autoWidth": false,
          scrollX:'50vh', 
          scrollY:'50vh',
        scrollCollapse: true,
    } );
} );
</script>
@endsection

