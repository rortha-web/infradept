@extends('layouts.master-page')
@section('title', 'Incident')
@section('content')
<div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Incident Data</h3>
            <div class="box-tools pull-right">
            <a href="{{ route('incident.index') }}"><button type="submit" class="btn btn-primary btn-xs"></i> Back to view</button></a>
        </div>
        </div>
        <div class="box-body">
            <div class="form-row">
                <fieldset class="col-md-12">    	
                    <legend>GENERAL INFO:</legend>
                    <div class="form-group col-md-3">
                    <label for="inputCity">Branch Name:</label>
                    <select id="inputState" class="form-control" name="branch_id">
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState">Incident Title:</label>
                    <input type="text" class="form-control" id="inputCity" name="name" placeholder="Ex: System unit error">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Category:</label>
                    <select id="inputState" class="form-control" name="category_id">
                    <option selected>Choose...</option>
                    <option>System Unit</option>
                    <option>Monitor</option>
                    <option>Printer</option>
                    <option>Scanner</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState">Model:</label>
                    <select id="inputState" class="form-control" name="model_id">
                        <option selected>Choose...</option>
                        <option>OptiPlex 5040</option>
                        <option>OptiPlex 5050</option>
                        <option>OptiPlex 7010</option>
                        <option>OptiPlex 7020</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Contact Person:</label>
                    <input type="text" class="form-control" id="inputZip" name="contact_person" placeholder="Enter BM, CTL, TL...">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputZip">Code:</label>
                    <input type="text" class="form-control" id="inputZip" name="incident_code"  placeholder="ID...">
                </div>
                </fieldset>
            </div>

            <div class="form-row">
                <fieldset class="col-md-12">    	
                    <legend>MAIN INFO:</legend>
                    <div class="form-group col-md-4">
                    <label for="inputState">Incident Report:</label>
                    <input type="text" class="form-control" id="inputCity" name="incident_report" placeholder="Enter Incident report">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">IT Inspection Report:</label>
                    <input type="text" class="form-control" id="inputZip" name="inspection_report" placeholder="Enter IT inspected">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Fix Asset Code:</label>
                    <input type="text" class="form-control" id="inputZip" name="fix_asset" placeholder="Enter Fix asset code">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Serial Number:</label>
                    <input type="text" class="form-control" id="inputCity" name="serial_number" placeholder="Enter Serial code">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Modify Date:</label>
                    <input type="date" class="form-control" id="inputZip" name="modify_date">
                </div>
                </fieldset>
            </div>

            <div class="form-row">
                <fieldset class="col-md-12">    	
                    <legend>BROKEN PART LIST:</legend>
                    <div class="form-group col-md-3">
                        <label for="inputState">Part Name:</label>
                        <input type="text" class="form-control" id="inputCity" name="part_name"  placeholder="Enter part name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Part Number:</label>
                        <input type="text" class="form-control" id="inputZip" name="part_number" placeholder="Enter part number">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Old Serial Number:</label>
                        <input type="text" class="form-control" id="inputCity" name="old_serial" placeholder="Enter old serial">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">New Serial Number:</label>
                        <input type="text" class="form-control" id="inputZip" name="new_serial" placeholder="Enter new serial">
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Remark</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="remarks"></textarea>
                </div>
            </div>
            <div class="form-row">
                <fieldset class="col-md-12">    	
                    <legend>AGREEMENT PERSON:</legend>
                    <div class="form-group col-md-3">
                        <label for="inputState">Engineer Name:</label>
                        <select id="inputState" class="form-control" name="engineer_id">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Representative Name:</label>
                        <input type="text" class="form-control" id="inputZip" name="representative" placeholder="Enter respon person">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Verifier Name:</label>
                        <select id="inputState" class="form-control" name="verifier_id">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Status:</label>
                        <select id="inputState" class="form-control" name="status_id">
                        <option selected>Choose...</option>
                        <option>Repairing</option>
                        <option>Send to Service</option>
                        <option>Send back to branch</option>
                        <option>Finished and Done</option>
                        </select>
                    </div>
                </fieldset>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Incident file send from branch</label>
                    <input type="file" class="form-control" id="inputCity" name="file_upload">
                </div>
            </div>
        </div>
        <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-block pull-left">Save Data</button>
        </div>
    </div>
</div>
@endsection
