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
                                    <label class="control-label">@lang('caseMgmt.attr.hobby') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="yes25" name="yes25" class="custom-control-input" onclick="hobbyFunc1()" required>
                                            <label class="custom-control-label" for="yes25">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="no25" name="yes25" class="custom-control-input" onclick="hobbyFunc2()" required>
                                            <label class="custom-control-label" for="no25">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="hobbySpecify" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.tell') <span class="text-danger">*</span></label>
                                    <input type="text" id="hobbyspecify" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.category') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cate11" name="cate" class="custom-control-input" required>
                                            <label class="custom-control-label" for="cate11">@lang('caseMgmt.attr.indoor')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cate22" name="cate" class="custom-control-input" required>
                                            <label class="custom-control-label" for="cate22">@lang('caseMgmt.attr.outdoor')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.sport') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="sport1" name="sport" class="custom-control-input" onclick="sportFunc1()" required>
                                            <label class="custom-control-label" for="sport1">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="sport2" name="sport" class="custom-control-input" onclick="sportFunc2()" required>
                                            <label class="custom-control-label" for="sport2">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="sportSpecify" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.tell') <span class="text-danger">*</span></label>
                                    <input type="text" id="sportspecify" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.category') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cate1" name="cate2" class="custom-control-input" required>
                                            <label class="custom-control-label" for="cate1">@lang('caseMgmt.attr.indoor')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cate2" name="cate2" class="custom-control-input" required>
                                            <label class="custom-control-label" for="cate2">@lang('caseMgmt.attr.outdoor')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.social_activity') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="social_activity1" name="social_activity" class="custom-control-input" onclick="socFunc1()" required>
                                            <label class="custom-control-label" for="social_activity1">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="social_activity2" name="social_activity" class="custom-control-input" onclick="socFunc2()" required>
                                            <label class="custom-control-label" for="social_activity2">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="socSpecify" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.tell') <span class="text-danger">*</span></label>
                                    <input type="text" id="socspecify" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.level') <span class="text-danger">*</span></label>
                                    <select class="form-control" required>
                                        <option value="">Please Select</option>
                                        <option value="international">@lang('caseMgmt.attr.international')</option>
                                        <option value="nationality">@lang('caseMgmt.attr.nationality')</option>
                                        <option value="state">@lang('caseMgmt.attr.state')</option>
                                        <option value="area">@lang('caseMgmt.attr.area')</option>
                                        <option value="local">@lang('caseMgmt.attr.local')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.leisure_ques1') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="leisure_ques11" name="leisure_ques1" class="custom-control-input" required>
                                            <label class="custom-control-label" for="leisure_ques11">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="leisure_ques22" name="leisure_ques1" class="custom-control-input" required>
                                            <label class="custom-control-label" for="leisure_ques22">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.reason') <span class="text-danger">*</span></label>
                                    <input type="text" id="reasonBA" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    function hobbyFunc1() {
        $('#hobbySpecify').show();
    }
    function hobbyFunc2() {
        $('#hobbySpecify').hide();
    }

    function sportFunc1() {
        $('#sportSpecify').show();
    }
    function sportFunc2() {
        $('#sportSpecify').hide();
    }

    function socFunc1() {
        $('#socSpecify').show();
    }
    function socFunc2() {
        $('#socSpecify').hide();
    }
</script>
          

