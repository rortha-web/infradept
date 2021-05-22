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
          <h3 class="box-title">Category Data</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('category.index') }}"><button type="submit" class="btn btn-primary btn-xs"></i> Back to view</button></a>
          </div>
        </div>
        <!-- /.box-header -->
        <form role="form" action="{{ route('category.store') }}"  method="post" enctype="multipart/from.date">
          @csrf
          <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group col-md-4">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter category name" value="{{ old('name') }}" required autocomplete="off">
                  </div>
                  <div class="form-group col-md-4">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter description" value="{{ old('description') }}" autocomplete="off">
                  </div>
                </div>
              </div>
            </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block btn-sm">Submit</button>
              </div>
        </form>
    </div>
</div>
@endsection