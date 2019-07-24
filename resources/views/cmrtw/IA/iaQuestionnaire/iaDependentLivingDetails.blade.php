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
                                    <label class="control-label">@lang('caseMgmt.attr.marriage_status')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.single')</option>
                                        <option value="no">@lang('caseMgmt.attr.married')</option>
                                        <option value="no">@lang('caseMgmt.attr.widower')</option>
                                        <option value="no">@lang('caseMgmt.attr.widow')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.partner_working')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.dependent_number')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="wife">@lang('caseMgmt.attr.wife')</option>
                                        <option value="not_school">@lang('caseMgmt.attr.not_school')</option>
                                        <option value="primary_school">@lang('caseMgmt.attr.primary_school')</option>
                                        <option value="secondary_school">@lang('caseMgmt.attr.secondary_school')</option>
                                        <option value="university">@lang('caseMgmt.attr.university')</option>
                                        <option value="disabled">@lang('caseMgmt.attr.disabled')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.estimate_living_cost')</label>
                                <select class="form-control">

                                        <option value="">Please Select</option>
                                        <option value="accomodation">@lang('caseMgmt.attr.accomodation')</option>
                                        <option value="education_loan">@lang('caseMgmt.attr.education_loan')</option>
                                        <option value="other_expenditure">@lang('caseMgmt.attr.other_expenditure')</option>
                                        <option value="other_loan">@lang('caseMgmt.attr.other_loan')</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.residence')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="apartment">@lang('caseMgmt.attr.apartment')</option>
                                        <option value="terrace_house">@lang('caseMgmt.attr.terrace_house')</option>
                                        <option value="bungalow">@lang('caseMgmt.attr.bungalow')</option>
                                        <option value="rumah_panjang">@lang('caseMgmt.attr.rumah_panjang')</option>
                                        <option value="worker_house">@lang('caseMgmt.attr.worker_house')</option>
                                        <option value="container_house">@lang('caseMgmt.attr.container_house')</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.residence_type')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.monthly_finance')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="partner_income">@lang('caseMgmt.attr.partner_income')</option>
                                        <option value="baitulmal">@lang('caseMgmt.attr.baitulmal')</option>
                                        <option value="perkeso_compesation">@lang('caseMgmt.attr.perkeso_compesation')</option>
                                        <option value="jkm_allowance">@lang('caseMgmt.attr.jkm_allowance')</option>
                                        <option value="freelance">@lang('caseMgmt.attr.freelance')</option>
                                        <option value="business">@lang('caseMgmt.attr.business')</option>
                                        <option value="children_aid">@lang('caseMgmt.attr.children_aid')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                <input type="text" id="remarks" class="form-control">
                                    
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
function showfield(name){
    if(name == 'Other') {
        $('#divspecify').show();
    }
    else {
        $('#divspecify').hide();
    }   
}
</script>


