<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.rehabPlan')</label> 
            <select class="form-control select "id="bankloc" name='bankloc' required>
                <option value="">Please Select</option>
                <option value="fce">FCE</option>
                <option value="wsa">WSA</option>
                <option value="prm">PRM</option>
                <option value="mm">MM</option>
                <option value="va">VA</option>
                <option value="vtm">VTM</option>
                <option value="jp">JP</option>
                <option value="sk">Financial Support</option>
                <option value="sp">Business Support</option>
                <option value="ra">Rehab Allowance</option>
                <option value="sm">Mobility Support</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.startTimeSuggestions')</label>
            <input class="form-control" type="date"  id="cdgnMasaMula">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.estimatedCost')</label>
            <input class="form-control" type="text"  id="anggarankos"  placeholder="RM 0.00">
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.communicationFrequency')</label> 
            <select class="form-control">
                <option value="">Please Select</option>
                <option value="">Once a week</option>
                <option value="">Two times a month</option>
                <option value="">Once a month</option>
                <option value="">Once in two months</option>
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.justificationCommunication')</label>
            <input class="form-control" type="text"  id="anggarankos"  placeholder="">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">Status</label>
            <select class="form-control">
                <option value="">Please Select</option>
                <option value="">New</option>
                <option value="">In action</option>
                <option value="">Cancel</option>
                <option value="">Done</option>
            </select>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.reasonForCancel')</label> 
            <input class="form-control" type="text"  id="anggarankos">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.remarks')</label>
            <input class="form-control" type="text"  id="remarks">
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-12">
        <button class="btn btn-success" type="button" onclick="rehabPlanningDetails();"><i class="fa fa-plus"></i></button>
    </div> 
</div>

<div id="rehabPlanningDetails"></div>

