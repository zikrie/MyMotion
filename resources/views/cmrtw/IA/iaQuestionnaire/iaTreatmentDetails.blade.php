<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <!-- 
                            <div class="row p-t-20">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.treatment_type') <span class="text-danger">*</span></label>
                                        <select class="form-control" tabindex="1" required>
                                            <option value="">Please Select</option>
                                            <option value="operation">@lang('caseMgmt.attr.operation')</option>
                                            <option value="conservative">@lang('caseMgmt.attr.conservative')</option>
                                            <option value="therapy">@lang('caseMgmt.attr.therapy')</option>
                                            <option value="alternative_treatment">@lang('caseMgmt.attr.alternative_treatment')</option>
                                            <option value="others_option">@lang('caseMgmt.attr.others_option')</option>   
                                        </select> 
                                    </div>
                                </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.treatment_specify') <span class="text-danger">*</span></label>
                                        <input type="text" id="treatment_specify" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                        <div class="input-group">
                                            <input type="text" id="remarks" class="form-control">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="button" onclick="treatmentDetails();"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="treatmentDetail"></div> -->

                            <!-- <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Type of Treatment</label>
                                    </div>
                                </div>
                            </div> -->

                        <div class="row p-t-20">
                            <div class="table-responsive m-t-40" >
                                <table id="try" width="60%"> 
                                    <tr>
                                        <label class="control-label">Type of Treatment  <span class="text-danger">*</span></label>
                                    </tr>
                                    <tr >
                                        <td width="20%"><label class="control-label">Surgery</label></td>
                                        <td width="60%">
                                            <div class="row">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="surgery">
                                                    <label class="custom-control-label" for="surgery"></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" id="" class="form-control" required> 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label class="control-label">Conservative</label></td>
                                        <td>
                                            <div class="row">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="conservative">
                                                    <label class="custom-control-label" for="conservative"></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" id="" class="form-control" required> 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label class="control-label">Mediaction</label></td>
                                        <td>
                                            <div class="row">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="mediaction">
                                                    <label class="custom-control-label" for="mediaction"></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" id="" class="form-control" required> 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label class="control-label">Therapy</label></td>
                                        <td>
                                            <div class="row">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="therapy">
                                                    <label class="custom-control-label" for="therapy"></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" id="" class="form-control" required> 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label class="control-label">Alternatif Treatment</label></td>
                                        <td>
                                            <div class="row">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="alternatifTreatment">
                                                    <label class="custom-control-label" for="alternatifTreatment"></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" id="" class="form-control" required> 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label class="control-label">Other</label></td>
                                        <td>
                                            <div class="row">
                                                <div class="input-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="other">
                                                        <label class="custom-control-label" for="other"></label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" id="" class="form-control" required> 
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" onclick="treatmentDetailsIA();"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>   
                                        </td>
                                    </tr>
                                    <tr><td></td>
                                        <td><div id="treatmentDetailsIA"></div></td>
                                    </tr>
                                </table>
                                
                            </div>     
                        </div>    
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Medical Report Date <span class="text-danger">*</span></label>
                                    <input type="date" id="" class="form-control" required> 
                                </div>
                            </div>
                        </div>
                        <hr>
                   
                        <div class="row p-t-20">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Remarks <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="" rows="3" placeholder=""></textarea>
                                </div>
                            </div>  
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- zikrie - iA (treatments details) -->
<script>
	var treatment_Details = 1;

    function treatmentDetailsIA() {

        treatment_Details++;
        var objTo = document.getElementById('treatmentDetailsIA')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + treatment_Details);
        var rdiv = 'removeclass' + treatment_Details;
        divtest.innerHTML = '<tr><td></td><td><div class="row"><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="other"><label class="custom-control-label" for="other"></label></div><div class="col-md-10"><input type="text" id="" class="form-control" required></div><td><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="remove_treatmentDetails('+treatment_Details+');"><i class="fa fa-minus"></i></button></div></td></div></td></tr>';

        objTo.appendChild(divtest)
    }

    function remove_treatmentDetails(rid) {
        $('.removeclass' + rid).remove();
        treatment_Details--;
    }
</script>

