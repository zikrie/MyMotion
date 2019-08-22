<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/">
                    <div class="form-body">
                        
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                       
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.hobby') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="hobby1" name="hobby" class="custom-control-input" onclick="hobbyAAFunc1()" required>
                                            <label class="custom-control-label" for="hobby1">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="hobby2" name="hobby" class="custom-control-input" onclick="hobbyAAFunc2()" required>
                                            <label class="custom-control-label" for="hobby2">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="hobbyAASpecify" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.tell') <span class="text-danger">*</span></label>
                                    <input type="text" id="hobbyAAspecify" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.category') <span class="text-danger">*</span></label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category11" name="category1" class="custom-control-input" required>
                                        <label class="custom-control-label" for="category11">@lang('caseMgmt.attr.indoor')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category22" name="category1" class="custom-control-input" required>
                                        <label class="custom-control-label" for="category22">@lang('caseMgmt.attr.outdoor')</label>
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
                                            <input type="radio" id="sport11" name="sport1" class="custom-control-input" onclick="sportAAFunc1()" required>
                                            <label class="custom-control-label" for="sport11">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="sport22" name="sport1" class="custom-control-input" onclick="sportAAFunc2()" required>
                                            <label class="custom-control-label" for="sport22">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="sportAASpecify" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.tell') <span class="text-danger">*</span></label>
                                    <input type="text" id="sportAAspecify" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.category') <span class="text-danger">*</span></label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cate12" name="category2" class="custom-control-input" required>
                                        <label class="custom-control-label" for="cate12">@lang('caseMgmt.attr.indoor')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cate21" name="category2" class="custom-control-input" required>
                                        <label class="custom-control-label" for="cate21">@lang('caseMgmt.attr.outdoor')</label>
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
                                            <input type="radio" id="social_activity11" name="social_activity1" class="custom-control-input" onclick="socAAFunc1()" required>
                                            <label class="custom-control-label" for="social_activity11">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="social_activity22" name="social_activity1" class="custom-control-input" onclick="socAAFunc2()" required>
                                            <label class="custom-control-label" for="social_activity22">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="socAASpecify" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.tell') <span class="text-danger">*</span></label>
                                    <input type="text" id="socAAspecify" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.level') <span class="text-danger">*</span></label>
                                    <select class="form-control" required>
                                        <option value="">Please Select</option>
                                        <option value="international1">@lang('caseMgmt.attr.international')</option>
                                        <option value="nationality1">@lang('caseMgmt.attr.nationality')</option>
                                        <option value="state1">@lang('caseMgmt.attr.state')</option>
                                        <option value="area1">@lang('caseMgmt.attr.area')</option>
                                        <option value="local1">@lang('caseMgmt.attr.local')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.reason') <span class="text-danger">*</span></label>
                                    <textarea class="form-control clearFields" rows="3" type="textarea"  id="reasonBA"></textarea>
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

    function hobbyAAFunc1() {
        $('#hobbyAASpecify').show();
    }
    function hobbyAAFunc2() {
        $('#hobbyAASpecify').hide();
    }

    function sportAAFunc1() {
        $('#sportAASpecify').show();
    }
    function sportAAFunc2() {
        $('#sportAASpecify').hide();
    }

    function socAAFunc1() {
        $('#socAASpecify').show();
    }
    function socAAFunc2() {
        $('#socAASpecify').hide();
    }
</script>
          

