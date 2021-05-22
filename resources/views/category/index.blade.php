@extends('layouts.master-page')
@section('title', 'Category')
@section('content')

<div class="row">
  <div class="col-xs-10">
    <div class="box box-primary">
      <div class="box-header with-border">
        <a href="{{ route('category.create') }}" class="btn btn-primary btn-xs"> New Category </a>
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
        <table id="tablecheckallcategory" class="table table-bordered table-hover text-center">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">Category Name</th>
              <th class="text-center">Description</th>
              <th class="text-center">Date</th>
              <th class="text-center">ACTION</th>
              <th class="text-center"><input type="checkbox" id="checkall" /></th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $key => $cate)
              <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $cate -> name }}</td>
              <td>{{ $cate -> description }}</td>
              <td>{{ $cate -> created_at }}</td>
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