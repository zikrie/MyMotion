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
                                    <label class="control-label">@lang('caseMgmt.attr.interested_work')</label>
                                    <select class="form-control" onchange="workMotivationYesNo(this.options[this.selectedIndex].value)" required>
                                        
                                        <option value="">Please Select</option>
                                        <option value="workMotivationYes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="workMotivationNo">@lang('caseMgmt.attr.no')</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div id="hiddenDiv" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.reason')</label>
                                        <select class="form-control" onchange="workMotivation(this.options[this.selectedIndex].value)" required>
                                            <option value="">Please Select</option>
                                            <option value="age">@lang('caseMgmt.attr.age')</option>
                                            <option value="workAlone">@lang('caseMgmt.attr.workAlone')</option>
                                            <option value="workMOthers">@lang('caseMgmt.attr.others')</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" id="workMotivationOther" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                    <input type="text" id="workMotivationSpecify" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    function workMotivation(name){
        if(name == 'workMOthers') {
            $('#workMotivationOther').show();
        }
        else {
            $('#workMotivationOther').hide();
        }  
    }
    function workMotivationYesNo(aval) {
        if (aval == "workMotivationNo") {
            $('#hiddenDiv').show();
            
        } 
        else{
            $('#hiddenDiv').hide();
            $('#workMotivationOther').hide();
        }
    }
</script>

          

