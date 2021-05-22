@extends('layouts.master-page')
@section('title', 'Engineer')
@section('content')
<div class="col-md-8">
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Engineer Data</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('engineer.index') }}"><button type="submit" class="btn btn-primary btn-xs"></i> Back to view</button></a>
          </div>
        </div>
        <!-- /.box-header -->
      <form role="form" action="{{ route('engineer.store') }}"  method="post" enctype="multipart/from.date">
        @csrf
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Engineer Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter engineer name" autocomplete = "off" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>ID Card</label>
                <input type="text" class="form-control" name="id_card" placeholder="Enter ID Card" autocomplete = "off" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Position</label>
                <select class="form-control select2" name="position_id" tabindex="1" required>
                  <option>--Select--</option>
                  @foreach ($positions as $key => $pos)
                  <option value="{{ $pos -> id }}">{{ $pos -> name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Branch Site</label>
                <select class="form-control select2" name="branch_id" tabindex="1" required>
                  <option>--Select--</option>
                  @foreach ($branches as $key => $br)
                  <option value="{{ $br -> id }}">{{ $br -> name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Group</label>
                <select class="form-control select2" name="group_id" tabindex="1" required>
                  <option>--Select--</option>
                  @foreach ($groups as $key => $gr)
                  <option value="{{ $gr -> id }}">{{ $gr -> name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone" autocomplete = "off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" placeholder="Enter Description" autocomplete = "off">
              </div>
            </div>
          </div>
        </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn btn-sm btn btn-block">Submit</button>
            </div>
      </form>
      </div>
</div>
@endsection