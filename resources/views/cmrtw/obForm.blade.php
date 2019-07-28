@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("PERKESO_UI/assets/node_modules/calendar/dist/fullcalendar.css")}}" rel="stylesheet" />

@endsection

@section('content')



<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="p-20">
                <form action="#">
                        <h3 class="card-title">@lang('benefitDetails.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.resource')</label>
                                    <input type="text" id="resource" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.rtwcaserefno')</label>
                                    <input type="text" id="rtwcaserefno" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.officer_name')</label>
                                    <input type="text" id="officer_name" class="form-control">
                                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.service_details')</label>
                                    <input type="text" id="service_details" class="form-control">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.ob_name')</label>
                                    <input type="text" id="ob_name" class="form-control">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.accident_details')</label>
                                    <input type="text" id="accident_details" class="form-control">
                                </div>
                            </div>
                           
                          
                      
                    </div>



            <h3 class="card-title">@lang('benefitDetails.title1')</h3>
                       
                       
  <hr>
                        <!-- Column -->
                        <div class="col-12">
                                <div class="card">
                                        <div class="table-responsive m-t-40">
                                                <table id="add-contact" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>@lang('benefitDetails.attr.num')</th>
                                                            <th>Operation Branch Location</th>
                                                            <th>@lang('benefitDetails.attr.notice_id')</th>
                                                            <th>@lang('benefitDetails.attr.register_date')</th>
                                                            <th>Scheme Type(Act)</th>
                                                            <th>Benefit Type</th>
                                                            <th>Date of Accident/Date of Disability Notice</th>
                                                            <th>Decision of Employment Injury/Disability</th>
                                                            <th>@lang('benefitDetails.attr.status')</th>
                                                            <th>@lang('benefitDetails.attr.action')</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                           
                                                        {{-- @foreach ($workbasket as $wb) --}}
                                                        {{-- <tr> --}}
                                                            {{-- <td>{{ $wb->wbid }}</td> --}}
                                                            {{-- <td>{{substr($wb->date,6,2)}}-{{substr($wb->date,4,2)}}-{{substr($wb->date,0,4)}}</td> --}}
                                                            {{-- <td>{{ $datediff }}</td> --}}
                                                            {{-- <td>{{ $wb->time }}</td> --}}
                                                            {{-- <td>{{ $wb->rtwrefno }}</td> --}}
                                                            {{-- <td>{{ $wb->schemerefno }}</td> --}}
                                                            {{-- <td>{{ $wb->caseid }}</td> --}}
                                                            {{-- <td>{{ $wb->revisionrefno }}</td> --}}
                                                            {{-- <td>{{ $wb->medrefno }}</td> --}}
                                                            {{-- <td>{{ $wb->descen }}</td> --}}
                                                        {{-- </tr> --}}
                                                        {{-- @endforeach --}}


                                                        <tr>
                                                            <td>1</td>
                                                            <td>Kuala Lumpur</td>
                                                            {{-- <td>{{ $datediff }}</td> --}}
                                                            <td>22/03/2019</td>
                                                            <td>N12345</td>
                                                            <td>BK/ILAT</td>
                                                            <td>HUK</td>
                                                            <td>12/9/2018</td>
                                                            <td>HUS/HUK/ILAT</td>
                                                            <td><span class="label label-table label-success">Active</span></a></td>
                                                            <td><button type="button"class="btn btn-warning" data-toggle="modal" data-target="#myModal">View</button></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                            </div>
                        </div>

                          <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.decision')</label>
                                <select class="form-control" tabindex="1">
                                    <option value="">Please Select</option>
                                <option value="accept">Accept</option>
                                <option value="not_accept">Not Accept</option>
                            </select>
                                </div>
                            </div> 

                       
                              <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('benefitDetails.save')</button>
                                </div>               
    </form>

</div>
</div>
</div>
</div>
</div>


<!--button View-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
       {{--  <!-- Modal Header -->
        {{-- <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> --}}
        
        <!-- Modal body -->
        <div class="modal-body">
         <label for="email"><b>Case Details</b></label>
    <input type="text" name="case_details" id="case_details" class="form-control" required>
        </div>

         <div class="modal-body">
         <label for="email"><b> Details</b></label>
    <input type="text" name="case_details" id="case_details" class="form-control" required>
        </div>

         <div class="modal-body">
         <label for="email"><b>HUK Details</b></label>
    <input type="text" name="case_details" id="case_details" class="form-control" required>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  @endsection