@extends('layouts.master-page')
@section('title', 'Engineer')
@section('content')

<div class="row">
  <div class="col-xs-10">
    <div class="box box-primary">
      <div class="box-header with-border">
        <a href="{{ route('engineer.create') }}" class="btn btn-primary btn-xs"> New Engineer </a>
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
          @if (Session::has('status'))
            <div class="alert alert-success" style="height: 50%">{{ Session::get('status')}}</div>
          @endif
        <table id="tablecheckallengineer" class="table table-bordered table-hover text-center">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">Engineer Name</th>  
              <th class="text-center">ID Card</th>
              <th class="text-center">Position</th>
              <th class="text-center">Branch Site</th>  
              <th class="text-center">In Group</th>
              <th class="text-center">Phone Number</th>
              <th class="text-center">Description</th>
              <th class="text-center">Create Date</th>
              <th class="text-center">ACTION</th>
              <th class="text-center"><input type="checkbox" id="checkall" /></th>
            </tr>
          </thead>
          <tbody>
          @foreach ($engineers as $key => $eng)
            <tr id="eid {{ $eng -> id }}">
              <td>{{ ++$key }}</td>
              <td>{{ $eng -> name }}</td>
              <td>{{ $eng -> id_card }}</td>
              <td>{{ optional ($eng -> position) -> name }}</td>
              <td>{{ optional ($eng -> branch) -> name }}</td>
              <td>{{ optional ($eng -> group) -> name }}</td>
              <td>{{ $eng -> phone }}</td>
              <td>{{ $eng -> description}}</td>
              <td>{{ $eng -> created_at }}</td>
              <td>
                <a href="" class="btn btn-success btn-xs rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit">
                  <i class="fa fa-edit"></i>
                </a>
                <a href="" class="btn btn-danger btn-xs rounded-0" onclick="destroy({{ $eng -> id }})" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">
                    <i class="fa fa-trash"></i>
                </a>
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

<script>
    function destroy(id){
      event.preventDefault();
      const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      if(confirm("Are you sure to delete record?")){
        $.ajax({
          type: 'POST',
          header:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
          },
          url:'/engineer/' + id,
          type: 'DELETE',
          data: {
            _token:$("input[name = _token").val()
          },
          success:function(response){
            alert(data);
            $('#eid').DataTable().ajax.reload(null, false);
            window.location.reload();
          },
          error:function(error){
            alert(data);
          }
        });
      }
    }
  </script>
  @endsection

  