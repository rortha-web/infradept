@extends('layouts.master-page')
@section('title', 'Verify')
@section('content')
<div class="col-md-8">
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Verifier Data</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('verify.index') }}"><button type="submit" class="btn btn-primary btn-xs"></i> Back to view</button></a>
          </div>
        </div>
        <!-- /.box-header -->
        <form role="form" action="{{ route('verify.store') }}"  method="post" enctype="multipart/from.date">
        @csrf
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Verifier Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter verifier name" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>ID Card:</label>
                <input type="text" class="form-control" name="id_card" placeholder="Enter ID Card" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Position:</label>
                <select class="form-control select2" name="position_id" id="position_id">
                  <option value="">---Select---</option>
                  @foreach ($positions as $key => $pos)
                  <option value="{{ $pos -> id }}">{{ $pos -> name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Branch Site:</label>
                <select class="form-control select2" name="branch_id" id="branch_id">
                  <option value="">---Select---</option>
                  @foreach ($branches as $key => $br)
                  <option value="{{ $br -> id }}">{{ $br -> name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Group:</label>
                <select class="form-control select2" name="group_id" id="group_id">
                  <option value="">---Select---</option>
                  @foreach ($groups as $key => $gr)
                  <option value="{{ $gr -> id }} ">{{ $gr -> name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone number" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Description:</label>
                <input type="text" class="form-control" name="description" placeholder="Enter Description" autocomplete="off">
              </div>
            </div>
          </div>
        </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn btn-block btn btn-sm">Submit</button>
            </div>
        </form>
      </div>
</div>
@endsection