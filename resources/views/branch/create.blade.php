@extends('layouts.master-page')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif

<div class="col-md-8">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Branch Data</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('branch.index') }}"><button type="submit" class="btn btn-primary btn-xs"></i> Back to view</button></a>
          </div>
        </div>
          <form role="form" action="{{ route('branch.store') }}" method="POST" enctype="multipart/from.date">
            @csrf
            <div class="box-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Branch Name:</label>
                    <input type="text" class="form-control" placeholder="Enter branch name" name="name" value="{{ old('name') }}" required autocomplete="off">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>FC Code:</label>
                    <input type="text" class="form-control" placeholder="Enter branch code" name="fc_code" value="{{ old('fc_code') }}" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Description:</label>
                    <input type="text" class="form-control" placeholder="Enter description" name="description" value="{{ old('description') }}" autocomplete="off">
                  </div>
                </div>
              </div>
            </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block btn btn-sm">Save Data</button>
              </div>
          </form>
      </div>
</div>
@endsection