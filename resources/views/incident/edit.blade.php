@extends('layouts.master-page')
@section('title', 'Incident')
@section('content')
<div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Incident Data Update</h3>
            <div class="box-tools pull-right">
            <a href="{{ route('incident.index') }}"><button type="submit" class="btn btn-primary btn-xs"></i> Back to view</button></a>
        </div>
        </div>
        <div class="box-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Branch Name:</label>
                    <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Incident Title:</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Contact Person:</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Incident Title:</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">IT Inspection Report:</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Remark:</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-row">
                <fieldset class="col-md-12">    	
                    <legend>Broken Part List:</legend>
                    <div class="form-group col-md-3">
                        <label for="inputState">Part Name:</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Part Number:</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Old Serial Number:</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">New Serial Number:</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </fieldset>
            </div>
            <div class="form-row">
                <fieldset class="col-md-12">    	
                    <legend>Decided Person:</legend>
                    <div class="form-group col-md-3">
                        <label for="inputState">Engineer Name:</label>
                        <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Representative Name:</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Verifier Name:</label>
                        <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-block pull-left">Update Data</button>
        </div>
    </div>
</div>
@endsection
