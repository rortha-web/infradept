@extends('layouts.master-page')
@section('title', 'Engineer')
@section('content')

<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <a href="{{ route('incident.create') }}" class="btn btn-primary btn-xs"> New Incident </a>
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
        <table id="tablecheckallincident" class="table table-bordered table-hover text-center">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">IC Code</th>
              <th class="text-center">Branch</th>  
              <th class="text-center">Title</th>
              <th class="text-center">Model</th>
              <th class="text-center">Aseet Code</th>
              <th class="text-center">Serial</th>
              <th class="text-center">Contact</th>
              <th class="text-center">Modify Date</th>
              <th class="text-center">Report</th>  
              <th class="text-center">Inspection</th>
              <!-- <th class="text-center">Part Name</th>
              <th class="text-center">Part Number</th>
              <th class="text-center">Old Serial</th>
              <th class="text-center">New Serial</th> -->
              <th class="text-center">Remark</th>
              <th class="text-center">Engineer</th>
              <th class="text-center">Represent</th>
              <th class="text-center">Verifier</th>
              <th class="text-center">Status</th>
              <th class="text-center">ACTION</th>
              <th class="text-center"><input type="checkbox" id="checkall" /></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td>1</td>
              <td>001</td>
              <td>IC001</td>
              <td>System Unit</td>
              <td>Dell OptiPlex 7010</td>
              <td>FA0010302001</td>
              <td>J12K44T</td>
              <td>CTL</td>
              <td>12-02-2021</td>
              <td>No power in</td>
              <td>Broken power</td>
              <!-- <td></td>
              <td></td>
              <td></td>
              <td></td> -->
              <td>Change new power supply</td>
              <td>Keo Rortha</td>
              <td>Sorachna</td>
              <td>Lao Buntheang</td>
              <td>Repairing</td>
              <td>
                <button class="btn btn-success btn-xs rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger btn-xs rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
              </td>
              <td><input type="checkbox" class="checkthis" /></td>
            </tr>
            <tr>
            <td>2</td>
              <td>001</td>
              <td>IC002</td>
              <td>System Unit</td>
              <td>Dell OptiPlex 7010</td>
              <td>FA0010302001</td>
              <td>J12K44T</td>
              <td>CTL</td>
              <td>12-02-2021</td>
              <td>No power in</td>
              <td>Broken power</td>
              <!-- <td></td>
              <td></td>
              <td></td>
              <td></td> -->
              <td>Change new power supply</td>
              <td>Keo Rortha</td>
              <td>Sorachna</td>
              <td>Lao Buntheang</td>
              <td>Send back to branch</td>
              <td>
                <button class="btn btn-success btn-xs rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger btn-xs rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
              </td>
              <td><input type="checkbox" class="checkthis" /></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  @endsection