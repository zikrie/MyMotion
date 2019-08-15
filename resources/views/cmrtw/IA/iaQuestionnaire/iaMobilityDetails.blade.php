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
                                    <label class="control-label">@lang('caseMgmt.attr.transportation') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="transportyes" name="transport" class="custom-control-input" required>
                                            <label class="custom-control-label" for="transportyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="transportno" name="transport" class="custom-control-input" required>
                                            <label class="custom-control-label" for="transportno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.trans_support') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="trans_supportyes" name="trans_support" class="custom-control-input" required>
                                            <label class="custom-control-label" for="trans_supportyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="trans_supportno" name="trans_support" class="custom-control-input" required>
                                            <label class="custom-control-label" for="trans_supportno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.cur_trans_usage') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="cur_trans_usageyes" name="cur_trans_usage" class="custom-control-input" required>
                                            <label class="custom-control-label" for="cur_trans_usageyes">@lang('caseMgmt.attr.personal')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cur_trans_usageno" name="cur_trans_usage" class="custom-control-input" required>
                                            <label class="custom-control-label" for="cur_trans_usageno">@lang('caseMgmt.attr.public')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.own_vehicles') <span class="text-danger">*</span></label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="car">
                                        <label class="custom-control-label" for="car">@lang('caseMgmt.attr.car')</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="moto">
                                        <label class="custom-control-label" for="moto">@lang('caseMgmt.attr.motorcycle')</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="van">
                                        <label class="custom-control-label" for="van">@lang('caseMgmt.attr.van')</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="otheroption">
                                        <label class="custom-control-label" for="otheroption">@lang('caseMgmt.attr.others_option')</label>
                                    </div>
                                    <div class="form-group" id="divspecify" style="display:none;">
                                        <label class="control-label">@lang('caseMgmt.attr.specify') <span class="text-danger">*</span></label>
                                        <input type="text" id="specify" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        <!-- </div>
                        <div class="row p-t-20">  -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.modified_vehicles') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="modified_vehiclesyes" name="modified_vehicles" class="custom-control-input" required>
                                            <label class="custom-control-label" for="modified_vehiclesyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="modified_vehiclesno" name="modified_vehicles" class="custom-control-input" required>
                                            <label class="custom-control-label" for="modified_vehiclesno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.driving_capabilities') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="driving_capabilitiesyes" name="driving_capabilities" class="custom-control-input" required>
                                            <label class="custom-control-label" for="driving_capabilitiesyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="driving_capabilitiesno" name="driving_capabilities" class="custom-control-input" required>
                                            <label class="custom-control-label" for="driving_capabilitiesno">@lang('caseMgmt.attr.no')</label>
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
</div>



<script type="text/javascript">

$(function () {
        $("#otheroption").click(function () {
            if ($(this).is(":checked")) {
                $("#divspecify").show();
            } else {
                $("#divspecify").hide();
            }
        });
    });
</script>


