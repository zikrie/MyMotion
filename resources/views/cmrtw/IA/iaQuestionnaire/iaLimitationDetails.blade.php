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
                                    <label class="control-label">@lang('caseMgmt.attr.face_limitation') <span class="text-danger">*</span></label>
                                    <input type="text" id="face_limitation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.require_rehab')<span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="require_rehabyes" name="require_rehab" class="custom-control-input" onclick="DCYesNo1()" required>
                                            <label class="custom-control-label" for="require_rehabyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="require_rehabno" name="require_rehab" class="custom-control-input" onclick="DCYesNo2()" required>
                                            <label class="custom-control-label" for="require_rehabno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div id="hideEquip" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.rehabtype')<span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                             <div class="col-md-4">
                                                 <label class="control-label">@lang('caseMgmt.attr.physicalRehab')</label>
                                             </div>
                                             <div class="col-sm-1">
                                                   <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="physicalRehab" onclick="show()">
                                                        <label class="custom-control-label" for="physicalRehab"></label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                             <div class="col-md-4">
                                                 <label class="control-label">@lang('caseMgmt.attr.orthotic') </label>
                                             </div>
                                             <div class="col-sm-1">
                                                   <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="orthotic" onclick="show()">
                                                        <label class="custom-control-label" for="orthotic"></label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                             <div class="col-md-4">
                                                 <label class="control-label">@lang('caseMgmt.attr.prosthetic')</label>
                                             </div>
                                             <div class="col-sm-1">
                                                   <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="prosthetic" onclick="show()">
                                                        <label class="custom-control-label" for="prosthetic"></label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                             <div class="col-md-4">
                                                 <label class="control-label">@lang('caseMgmt.attr.implant')</label>
                                             </div>
                                             <div class="col-sm-1">
                                                   <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="implant" onclick="show()">
                                                        <label class="custom-control-label" for="implant"></label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div id="hideDate" class="form-group" style="display:none">
                                         <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.proposestartdate') <span class="text-danger">*</span></label>
                                            <input type="date" id="initialAssessTime" class="form-control" required>
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
    
    function DCYesNo1() {
            $('#hideEquip').show();
    }
    function DCYesNo2() {
            $('#hideEquip').hide();
    }

    // $(function () {
    //     $("#physicalRehab").click(function () {
    //         if ($(this).is(":checked")) {
    //             $("#hideDate").show();
    //         } else {
    //             $("#hideDate").hide();
    //         }
    //     });
    // });
    // $(function () {
    //     $("#orthotic").click(function () {
    //         if ($(this).is(":checked")) {
    //             $("#hideDate").show();
    //         } else {
    //             $("#hideDate").hide();
    //         }
    //     });
    // });

    var check = document.getElementById("physicalRehab");
    var check1 = document.getElementById("orthotic");
    var check2 = document.getElementById("prosthetic");
    var check3 = document.getElementById("implant");
    
    function show(){
        if(check.checked == true){
            $("#hideDate").show();
        }
        else if(check1.checked == true){
            $("#hideDate").show();
        }else if(check2.checked == true){
            $("#hideDate").show();
        }else if(check3.checked == true){
            $("#hideDate").show();
        }else {
            $("#hideDate").hide();
        }
    }
</script>



