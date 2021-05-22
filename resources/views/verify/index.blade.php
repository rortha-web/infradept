@extends('layouts.master-page')
@section('title', 'Verify')
@section('content')

<div class="row">
  <div class="col-xs-10">
    <div class="box box-primary">
      <div class="box-header with-border">
        <a href="{{ route('verify.create') }}" class="btn btn-primary btn-xs"> New Verifier </a>
        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
        <!-- <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div> -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="tablecheckallverifier" class="table table-bordered table-hover text-center">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">Verifier Name</th>  
              <th class="text-center">ID Card</th>
              <th class="text-center">Position</th>
              <th class="text-center">Branch Site</th>  
              <th class="text-center">In Group</th>
              <th class="text-center">Phone Number</th>
              <th class="text-center">ACTION</th>
              <th class="text-center"><input type="checkbox" id="checkall" /></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($verifier as $key => $ver)
              <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $ver -> name }}</td>
                  <td>{{ $ver -> id_card }}</td>
                  <td>{{ optional ($ver -> position) -> name }}</td> <!-- position, branch, group are past from VerifierControll on index function -->
                  <td>{{ optional ($ver -> branch) -> name }}</td>
                  <td>{{ optional ($ver -> group) -> name}}</td>
                  <td>{{ $ver -> phone}}</td>
                  <td>
                    <button class="btn btn-success btn-xs rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger btn-xs rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                  <td><input type="checkbox" class="checkthis" /></td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  @endsection