<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                            <div class="row p-t-20">
        
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.ob_name')</label>
                                                <input type="text" id="ob_name" class="form-control" >
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.id_no')</label>
                                                <input type="text" id="id_no" class="form-control" >
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.rtwcaserefno')</label><br>
                                                <input type="text" id="rtwcaserefno" class="form-control" >
                                            </div>
                                        </div>
                                        
                                    </div>
        
                                    <div class="table-responsive m-t-40">
                                            {{-- <table id="add-contact" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%"> --}}
                                            <table id="add-contact" class="display table table-hover table-striped table-bordered" text-align="center" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th align="top">No</th>
                                                        <th>@lang('caseMgmt.attr.category_industry')</th>
                                                        <th>@lang('caseMgmt.attr.subcategory_industry')</th>
                                                        <th>@lang('caseMgmt.attr.first_job')</th>
                                                        <th>@lang('caseMgmt.attr.second_job')</th> 
                                                        <th>@lang('caseMgmt.attr.third_job')</th>
                                                        <th>@lang('caseMgmt.attr.state')</th>
                                                        <th>@lang('insuredPerson.attr.city')</th>
                                                        <th>Action</th>                               
                                                    </tr>
                                                </thead>
                                                <tbody id="add-contact-body">
                                                    <tr id= "addRehab_1">
                                
                                                        <td>1</td>
                                                        <td>FCE</td>                      
                                                        <td>2019-04-08</td>
                                                        <td>RM 154.00</td>
                                                        <td>RM 154.00</td>
                                                        <td>RM 154.00</td>
                                                        <td>RM 154.00</td>
                                                        <td>RM 154.00</td>
                                                        
                                                        
                                                        {{-- <td>test</td> --}}
                                                        
                                                        <td> 
                                                            <div class= "btn-group">
                                                            
                                                                <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="1">
                                                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                                                </button>
                                                                                
                                                                <button class="delete-modal btn btn-danger" data-id="1">
                                                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                
                                                    <tr id= "addRehab_2">
                                                            <td>2</td>
                                                            <td>WSA</td>                      
                                                            <td>2019-08-01</td>
                                                            <td>2019-08-01</td>
                                                            <td>2019-08-01</td>
                                                            <td>2019-08-01</td>
                                                            <td>2019-08-01</td>
                                                            <td>2019-08-01</td>
                                                             
                                                            
                                                            
                                                            <td> 
                                                                <div class= "btn-group">
                                                                
                                                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                                    </button>
                                                                                    
                                                                    <button class="delete-modal btn btn-danger"  data-id="2">
                                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                
                                                        <tr id= "addRehab_3">
                                                                <td>3</td>
                                                                <td>FCE</td>                      
                                                                <td>2019-08-01</td>
                                                                <td>RM 100.00</td>
                                                                <td>RM 100.00</td>
                                                                <td>RM 100.00</td>
                                                                <td>RM 100.00</td>
                                                                <td>RM 100.00</td>
                                                                
                                                                
                                                               
                                                                <td> 
                                                                    <div class= "btn-group">
                                                                    
                                                                        <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="3">
                                                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                                                        </button>
                                                                                        
                                                                        <button class="delete-modal btn btn-danger"  data-id="3">
                                                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr> 
                                                            
                                                          
                                
                                                   
                                                </tbody>
                                            </table>
                                        </div>
        
                                        <div class="row p-t-20">
        
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.exp_limitation')</label>
                                                            <input type="text" id="exp_limitation" class="form-control" >
                                                        </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.sip_date')</label>
                                                            <input type="text" id="sip_date" class="form-control" >
                                                        </div>
                                                    </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.aging')</label><br>
                                                            <input type="text" id="aging" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('caseMgmt.attr.casemgr_name')</label><br>
                                                                <input type="text" id="casemgr_name" class="form-control" >
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        
            
        
        