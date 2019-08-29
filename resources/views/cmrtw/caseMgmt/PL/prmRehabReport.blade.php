<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive m-t-40">
                                            <table id="example231" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                               
                                                                <th>@lang('caseMgmt.attr.doc_description')</th>
                                                                <th>@lang('caseMgmt.attr.report_date')</th>
                                                                <th>@lang('caseMgmt.attr.view')</th>
                                                                <th>@lang('caseMgmt.attr.verify1')</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            
                                                           
    
                                                            <tr>
                                                                
                                                                <td>Initial Report</td>
                                                                <td>2/13/2019</td>
                                                                <td><div class= "btn-group">        
                                                                    <button type="button" class="btn btn-primary edit">
                                                                        <span class='glyphicon glyphicon-check'></span> View
                                                                    </button>
                                                                </div>
                                                                </td>
                                                                <td> <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                                    </div></td>
                                                              
                                                            </tr> 
                                                            <tr>
                                                                
                                                                <td>Mid Term Report </td>
                                                                <td>4/13/2019</td>
                                                                <td><div class= "btn-group">        
                                                                    <button type="button" class="btn btn-primary edit">
                                                                        <span class='glyphicon glyphicon-check'></span> View
                                                                    </button>
                                                                </div>
                                                                </td>
                                                                <td>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                                    </div>                                           
                                                                </td>
                                                              
                                                            </tr> 
                                                            <tr>
                                                                
                                                                <td>Final Report <span class="choosefile"><input type="file" name=""id="" required>
                                                                </span></td>
                                                                <td></td>
                                                                <td><div class= "btn-group">        
                                                                    <button type="button" class="btn btn-primary edit">
                                                                        <span class='glyphicon glyphicon-check'></span> View
                                                                    </button>
                                                                </div>
                                                                </td>
                                                                <td> <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                                    </div></td>
                                                              
                                                            </tr> 
                                                            <tr>
                                                                
                                                                <td>Extension Report <span class="choosefile"><input type="file" name=""id="" required>
                                                                </span></td>
                                                                <td></td>
                                                                <td><div class= "btn-group">        
                                                                    <button type="button" class="btn btn-primary edit">
                                                                        <span class='glyphicon glyphicon-check'></span> View
                                                                    </button>
                                                                </div>
                                                                </td>
                                                                <td> <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                                    </div></td>
                                                              
                                                            </tr>  
                                                            
                                                        </tbody>
                                            </table>
                                              
                                        </div>
                                        <div class="form-action">
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success">Upload </button>
                                            <button type="button" id="add_doc" class="btn btn-secondary">Add Document</button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5><label class="control-label">@lang('caseMgmt.attr.current_ability')</label></h5>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                                <textarea class="form-control" rows="5" type="textarea"  id="remarks"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-action">
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success">Submit </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        
        
        
            
        
        