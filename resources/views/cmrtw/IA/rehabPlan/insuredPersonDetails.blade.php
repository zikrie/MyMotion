<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('ia.attr.caseReferenceNo')</label> 
            <input type="text" id="Norujukan" class="form-control" readonly value="@if(!empty($data)){{ $data->uniquerefno }} @endif">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('ia.attr.name')</label>
            <input type="text" id="name" class="form-control" readonly >
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('ia.attr.newICNo')</label>
            <input type="text" id="idNum" class="form-control" readonly>
        </div>
    </div>
</div>
     
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">@lang('ia.attr.address')</label>
            <input type="text" id="address" class="form-control" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <input type="text" id="address" class="form-control" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <input type="text" id="address" class="form-control" readonly>
        </div>
    </div>
</div>

<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('ia.attr.postcode')</label> 
            <input type="text" id="idNum" class="form-control" readonly>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('ia.attr.city')</label> 
            <input type="text" id="idNum" class="form-control" readonly>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('ia.attr.state')</label> 
            <input type="text" id="idNum" class="form-control" readonly>
        </div>
    </div>
</div>






        
 