<div class="card">
        <div class="card-body">
            <form class="form">
               
                     <div class="row p-t-20">
                            <div class="col-md-6">
                               <div class="form-group">
                                <label class="control-label">@lang('registrationRtw.attr.name')</label>
                                <input type="text" id="name" class="form-control"  value="@if(!empty($casertw)){{ $casertw->name }} @endif" disabled>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.id_type')</label>
                                    <input type="text" id="id_type" class="form-control" disabled>
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('registrationRtw.attr.address')</label>
                                        @if(!empty($casertw) && $casertw->add1 != '')
                                        <input type="text" id="add1" name="add1" value="{{ $casertw->add1 }}" class="form-control clearFields">
                                        @else
                                        <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if(!empty($casertw) && $casertw->add2 != '')
                                        <input type="text" id="add2" name="add2" value="{{ $casertw->add2 }}" class="form-control clearFields">
                                        @else
                                        <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" id="add3" name="add3" value="" class="form-control clearFields">
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>@lang('caseMgmt.attr.phone_home')</label>
                                            <input type="text" id="phone_home" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.phone_mobile')</label>
                                            <input type="text" id="phone_mobile" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>@lang('caseMgmt.attr.claim_date')</label>
                                            <input type="date" id="claim_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>@lang('caseMgmt.attr.total_presence')</label>
                                                <input type="text" id="total_presence" class="form-control" disabled>
                                                
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                            <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.upload_claimdoc')</label>
                                                        <div class="col-4">
                                                            <input type="file" name="image" id="image">
                                                            {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('ia.attr.upload')</button> --}}
                                                        </div>
                                                
                                            </div>
                                        </div>        
                    </div>
                       
                    </form>
                    <div class="table-responsive m-t-40">
                            {{-- <table id="add-contact" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%"> --}}
                            <table id="add-contact" class="display table table-hover table-striped table-bordered" text-align="center" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th align="top">Number</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Total Claim Days</th>
                                        <th>Activity</th>
                                        {{-- <th>Remarks</th> --}}
                                        <th>Action</th>                               
                                    </tr>
                                </thead>
                                <tbody id="add-contact-body">
                                    <tr id= "addRehab_1">
                
                                        <td>1</td>
                                        <td>2019-07-27</td>                      
                                        <td>Rehab</td>
                                        <td>10</td>
                                        <td></td>
                                        {{-- <td>test</td> --}}
            
                                        <td> 
                                            <div class= "btn-group">
                                
                                                <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                                </button>
                                                  <br>              
                                                <button class="delete-modal btn btn-danger"  data-id="2">
                                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                
                                    <tr id= "addRehab_2">
                                            <td>2</td>
                                            <td>2019-07-28</td>                      
                                            <td>Job Interview</td>
                                            <td>7</td>
                                            <td></td>
                                            {{-- <td>test</td> --}}
                                           
                                            <td> 
                                                <div class= "btn-group">
                                
                                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                    </button>
                                                    <br>           
                                                    <button class="delete-modal btn btn-danger"  data-id="2">
                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                
                                       
                                            
                                          
                
                                   
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
    