@extends('layouts.master-page')
@section('title', 'Group')
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

<div class="col-md-10">
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Position Data</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('position.index') }}"><button type="submit" class="btn btn-primary btn-xs"></i> Back to view</button></a>
          </div>
        </div>
        <!-- /.box-header -->
      <form role="form" action="{{ route('position.store') }}"  method="post" enctype="multipart/from.date">
        @csrf
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Position Title</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Position Title" value="{{ old('name') }}" required autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" placeholder="Enter description" value="{{ old('description') }}" autocomplete="off">
              </div>
            </div>
          </div>
        </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-block btn-sm">Save Data</button>
            </div>
          </form>
      </div>
</div>
@endsection