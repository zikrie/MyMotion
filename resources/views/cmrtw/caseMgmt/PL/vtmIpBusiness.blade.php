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
                                                <label class="control-label">@lang('caseMgmt.attr.main_group')</label>
                                                <input type="text" id="main_group" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.main_subgroup')</label>
                                                    <input type="text" id="main_subgroup" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.small_group')</label>
                                                    <input type="text" id="small_group" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.category_type')</label>
                                                    <input type="text" id="category_type" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.category_industry')</label>
                                                    <input type="text" id="category_industry" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.subcategory_industry')</label>
                                                    <input type="text" id="subcategory_industry" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.monthly_income')</label>
                                                    <input type="text" id="monthly_income" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.modal_resource')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control" onchange="myFunctionVtm(this.options[this.selectedIndex].value)" required> 
                                                            <option value="">Please Select</option>
                                                            <option value="modal_resource1">@lang('caseMgmt.attr.modal_resource1')</option>
                                                            <option value="modal_resource2">@lang('caseMgmt.attr.modal_resource2')</option>
                                                            <option value="modal_resource3">@lang('caseMgmt.attr.modal_resource3')</option>
                                                            <option value="modal_resource4">@lang('caseMgmt.attr.modal_resource4')</option>
                                                            <option value="other">@lang('caseMgmt.attr.others_option')</option>
                                                           
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div id="otherHide" class="form-group" style="display:none">
                                                            <label class="control-label">@lang('caseMgmt.attr.specify')</label> 
                                                            <input type="text" id="specify" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.registered_business')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control"> 
                                                            <option value="">Please Select</option>
                                                            <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                            <option value="no">@lang('caseMgmt.attr.no')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.hire_employee')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control"  onchange="myFunctionVtmEmp(this.options[this.selectedIndex].value)" required> 
                                                            <option value="">Please Select</option>
                                                            <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                            <option value="no">@lang('caseMgmt.attr.no')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div id="otherHide1" class="form-group" style="display:none">
                                                            <label class="control-label">@lang('caseMgmt.attr.total_employee')</label> 
                                                            <input type="text" id="total_employee" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                     
                                                    <label class="control-label">@lang('caseMgmt.attr.hire_oku')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control" onchange="myFunctionVtmOku(this.options[this.selectedIndex].value)"> 
                                                            <option value="">Please Select</option>
                                                            <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                            <option value="no">@lang('caseMgmt.attr.no')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div id="otherHide2" class="form-group" style="display:none">
                                                            <label class="control-label">@lang('caseMgmt.attr.total_oku')</label> 
                                                            <input type="text" id="total_oku" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                      
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script type="text/javascript">

            function myFunctionVtm(aval) 
                {
                    if (aval == "other") 
                    {
                        $('#otherHide').show();
                    } 
                    else 
                    {
                        $('#otherHide').hide();
                    }
            
                }

                function myFunctionVtmEmp(aval) 
                {
                    if (aval == "yes") 
                    {
                        $('#otherHide1').show();
                    } 
                    else 
                    {
                        $('#otherHide1').hide();
                    }
            
                }
                function myFunctionVtmOku(aval) 
                {
                    if (aval == "yes") 
                    {
                        $('#otherHide2').show();
                    } 
                    else 
                    {
                        $('#otherHide2').hide();
                    }
            
                }
            
            </script>

            

