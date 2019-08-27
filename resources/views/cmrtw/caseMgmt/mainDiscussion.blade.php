<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class=card-title>Discussion</h5>
                    <form action="#">
                        <div class="form-body">
                                
                                  
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="card">
                                            <div class="form-group row">
                                                    <div class="col-12">
                                                        <button class="btn btn-info btn-lg" type="button"  data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-plus"></i> </button>
                                                    </div>
                                                </div>
                                        <div class="table-responsive m-t-40">
                                               
                                                  
                                            <table id="example231" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>@lang('caseMgmt.attr.no')</th>
                                                                <th>@lang('caseMgmt.attr.category')</th>
                                                                <th>@lang('caseMgmt.attr.rehab_type')</th>
                                                                <th>@lang('caseMgmt.attr.discuss_date')</th>
                                                                <th>@lang('caseMgmt.attr.action')</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            
                                                           

                                                            <tr>
                                                                <td>1</td>
                                                                <td>With Insured Person</td>
                                                                <td>FCE</td>
                                                                <td>19/05/2018</td>
                                                                <td><div class= "btn-group">
                                         
                                                                        <button type="button" class="btn btn-primary edit">
                                                                                <span class='glyphicon glyphicon-check'></span> View
                                                                            </button>
                                                                </div>
                                                                </td>
                                                              
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Group</td>
                                                                <td>WSA</td>
                                                                <td>18/05/2018</td>
                                                                <td><div class= "btn-group">
                                
                                                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                                                        <span class="glyphicon glyphicon-edit"></span> Update
                                                                    </button>
                                                                                    
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
                            </div>

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="exampleModal1" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
        
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" id="rehabForm">
                            <div class="row p-t-20">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.category')</label> 
                                                <select name="select_opt" id="select_opt" class="form-control" onchange="showField890(this.options[this.selectedIndex].value)" required> 
                                                    <option value="">Please Select</option>
                                                    <option value="discusscat1">@lang('caseMgmt.attr.discuss_cat1')</option>
                                                    <option value="discuss_cat2">@lang('caseMgmt.attr.discuss_cat2')</option>
                                                </select>
                                            </div>
                                        </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.rehab_type')</label> 
                                        <select class="form-control select" id="bankloc" name="bankloc" required>
                                            <option value="">Please Select</option>
                                            <option value="FCE">FCE</option>
                                            <option value="WSA">WSA</option>
                                            <option value="PRM">PRM</option>
                                            <option value="MM">MM</option>
                                            <option value="VA">VA</option>
                                            <option value="VTM">VTM</option>
                                            <option value="JP">JP</option>
                                            <option value="Financial Support">Financial Support</option>
                                            <option value="Business Support">Business Support</option>
                                            <option value="Rehab Allowance">Rehab Allowance</option>
                                            <option value="Mobility Support">Mobility Support</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                            
                                        <div class="form-group" id="abujahal" style="display:none;">
                                            <label class="control-label">@lang('caseMgmt.attr.specify_no')</label>
                                            <select class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="car">@lang('caseMgmt.attr.option_ip')</option>
                                            <option value="car">@lang('caseMgmt.attr.option_geo')</option>
                                            <option value="motorcycle">@lang('caseMgmt.attr.option_quit')</option>
                                            <option value="van">@lang('caseMgmt.attr.option_unreachable')</option>
                                        </select>
                                            
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12" id="abujahal" style="display:none;">
                                           
                                                    <h6 class=card-title>With Insured Person</h6>
                                                            <div class="row p-t-20">

                                                                    <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('caseMgmt.attr.date')</label>
                                                                                <input type="date" id="date" class="form-control" disabled>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                                    <div class="row p-t-20">
                                                                    <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('caseMgmt.attr.medium')</label>
                                                                                <select name="select_opt" id="select_opt" class="form-control" onchange="showfieldMedium(this.options[this.selectedIndex].value)" required> 
                                                                                    <option value="">Please Select</option>
                                                                                    <option value="medium1">@lang('caseMgmt.attr.medium1')</option>
                                                                                    <option value="medium2">@lang('caseMgmt.attr.medium2')</option>
                                                                                    <option value="medium3">@lang('caseMgmt.attr.medium3')</option>
                                                                                    <option value="medium4">@lang('caseMgmt.attr.medium4')</option>
                                                                                    <option value="specify">@lang('caseMgmt.attr.other')</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6"> 
                                                                            <div class="form-group" id="abujahal1" style="display:none;">
                                                                                <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                                                                <input type="text" id="specify" class="form-control">
                                                                            </div>
                                                                            
                                                                        </div>
                                                                 </div>
                                                                 <div class="row p-t-20">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                                                                <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                                                                            </div>
                                                                        </div>
                                                                 </div>
                                                                        
                                        </div>

                                        <div class="col-md-12" id="abujahal2" style="display:none;">
                                           
                                                <h6 class=card-title>Group</h6>
                                                        <div class="row p-t-20">

                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('caseMgmt.attr.date')</label>
                                                                            <input type="date" id="date" class="form-control" disabled>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('caseMgmt.attr.location_discuss')</label>
                                                                            <input type="location_discuss" id="location_discuss" class="form-control" disabled>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                               
                                                             <div class="row p-t-20">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('caseMgmt.attr.purpose_discuss')</label>
                                                                            <textarea name="purpose_discuss" id="purpose_discuss" class="form-control" required rows="4" cols="50" disabled></textarea>
                                                                        </div>
                                                                    </div>
                                                             </div>
                                                                    
                                    </div>
                                                    
                                    
                    
                                
                            </div>  
                         
                                                                            
                           
                                    
                        </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="addRehab">
                                    <span class='glyphicon glyphicon-check'></span> Add
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class='glyphicon glyphicon-remove'></span> Close
                                </button>
                            </div>
                    </div>    
                </div>
            </div>
        </div>
        
<script type="text/javascript">
function showField890(name){
    if(name == 'discusscat1') {
        $('#abujahal').show();
    }
    else {
        $('#abujahal').hide();
    }
    if(name == 'discuss_cat2') {
        $('#abujahal2').show();
    }
    else {
        $('#abujahal2').hide();
    }      
}

function showfieldMedium(name){
    if(name == 'specify') {
        $('#abujahal1').show();
    }
    else {
        $('#abujahal1').hide();
    }   
}


</script>    

    
