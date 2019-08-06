<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                       
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.transportation') <span class="text-danger">*</span></label>
                                    <select class="form-control" required>
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.own_vehicles') <span class="text-danger">*</span></label>
                                    <select name="select_opt" id="select_opt" class="form-control" onchange="showfield(this.options[this.selectedIndex].value)" required> 
                                        <option value="">Please Select</option>
                                        <option value="car">@lang('caseMgmt.attr.car')</option>
                                        <option value="motorcycle">@lang('caseMgmt.attr.motorcycle')</option>
                                        <option value="van">@lang('caseMgmt.attr.van')</option>
                                        <option value="Other">@lang('caseMgmt.attr.others_option')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="divspecify" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify') <span class="text-danger">*</span></label>
                                    <input type="text" id="specify" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.modified_vehicles') <span class="text-danger">*</span></label>
                                    <select class="form-control" required>
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.driving_capabilities') <span class="text-danger">*</span></label>
                                    <select class="form-control" required>
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.trans_support') <span class="text-danger">*</span></label>
                                    <select class="form-control" required>
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
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
function showfield(name){
    if(name == 'Other') {
        $('#divspecify').show();
    }
    else {
        $('#divspecify').hide();
    }   
}
</script>


