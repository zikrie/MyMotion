<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-body">

                       <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="row">
                            <div class="col-md-5">
                                <fieldset class="border p-2">
                                    <legend  class="w-auto"><label class="control-label">@lang('caseMgmt.attr.scale')</label></legend>
                                        <div class="row p-l-20">    
                                            <label class="control-label">0   : @lang('caseMgmt.attr.scale1')</label>
                                        </div>
                                        <div class="row p-l-20">
                                            <label class="control-label">1   : @lang('caseMgmt.attr.scale2')</label>
                                        </div>
                                        <div class="row p-l-20">
                                            <label class="control-label">2 : @lang('caseMgmt.attr.scale3')</label>
                                        </div>
                                        <div class="row p-l-20">
                                            <label class="control-label">3 : @lang('caseMgmt.attr.scale4')</label>
                                        </div>
                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <table class="" cellspacing="0" width="90%">
                                    <!-- <tr>
                                        <th></th>
                                        <th>@lang('caseMgmt.attr.depression')</th>
                                        <th>@lang('caseMgmt.attr.anxiety')</th>
                                        <th>@lang('caseMgmt.attr.stress')</th>
                                    </tr> -->
                                    <tr>
                                        <td><label class="control-label">1. @lang('caseMgmt.attr.ques1') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS11">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS12">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS13">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS14">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">2. @lang('caseMgmt.attr.ques2') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA11" name="quesA1" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA11">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA12" name="quesA1" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA12">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA13" name="quesA1" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA13">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA14" name="quesA1" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA14">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">3. @lang('caseMgmt.attr.ques3') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD11" name="quesD1" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD11">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD12" name="quesD1" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD12">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD13" name="quesD1" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD13">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD14" name="quesD1" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD14">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">4. @lang('caseMgmt.attr.ques4') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA21" name="quesA2" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA21">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA22" name="quesA2" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA22">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA23" name="quesA2" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA23">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA24" name="quesA2" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA24">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">5. @lang('caseMgmt.attr.ques5') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD21" name="quesD2" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD21">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD22" name="quesD2" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD22">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD23" name="quesD2" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD23">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD24" name="quesD2" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD24">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">6. @lang('caseMgmt.attr.ques6') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS21" name="quesS2" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS21">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS22" name="quesS2" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS22">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS23" name="quesS2" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS23">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS24" name="quesS2" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS24">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">7. @lang('caseMgmt.attr.ques7') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA31" name="quesA3" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA31">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA32" name="quesA3" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA32">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA33" name="quesA3" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA33">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA34" name="quesA3" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA34">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">8. @lang('caseMgmt.attr.ques8') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS30" name="quesS3" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS30">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS31" name="quesS3" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS31">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS32" name="quesS3" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS32">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS33" name="quesS3" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS33">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">9. @lang('caseMgmt.attr.ques9') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA40" name="quesA4" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA40">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA41" name="quesA4" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA41">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA42" name="quesA4" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA42">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA43" name="quesA4" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA43">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">10. @lang('caseMgmt.attr.ques10') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD30" name="quesD3" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD30">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD31" name="quesD3" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD31">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD32" name="quesD3" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD32">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD33" name="quesD3" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD33">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">11. @lang('caseMgmt.attr.ques11') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS40" name="quesS4" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS40">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS41" name="quesS4" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS41">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS42" name="quesS4" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS42">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS43" name="quesS4" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS43">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">12. @lang('caseMgmt.attr.ques12') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS50" name="quesS5" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS50">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS51" name="quesS5" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS51">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS52" name="quesS5" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS52">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS53" name="quesS5" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS53">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">13. @lang('caseMgmt.attr.ques13') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="quesD40" name="quesD4" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                <label class="custom-control-label" for="quesD40">0</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="quesD41" name="quesD4" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                <label class="custom-control-label" for="quesD41">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="quesD42" name="quesD4" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                <label class="custom-control-label" for="quesD42">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="quesD43" name="quesD4" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                <label class="custom-control-label" for="quesD43">3</label>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">14. @lang('caseMgmt.attr.ques14') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS60" name="quesS6" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS60">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS61" name="quesS6" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS61">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS62" name="quesS6" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS62">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS63" name="quesS6" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS63">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">15. @lang('caseMgmt.attr.ques15') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA50" name="quesA5" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA50">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA51" name="quesA5" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA51">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA52" name="quesA5" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA52">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA53" name="quesA5" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA53">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">16. @lang('caseMgmt.attr.ques16') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD50" name="quesD5" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD50">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD51" name="quesD5" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD51">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD52" name="quesD5" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD52">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD53" name="quesD5" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD53">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">17. @lang('caseMgmt.attr.ques17') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD60" name="quesD6" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD60">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD61" name="quesD6" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD61">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD62" name="quesD6" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD62">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD63" name="quesD6" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD63">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">18. @lang('caseMgmt.attr.ques18') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS70" name="quesS7" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS70">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS71" name="quesS7" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS71">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS72" name="quesS7" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS72">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS73" name="quesS7" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesS73">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">19. @lang('caseMgmt.attr.ques19') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA60" name="quesA6" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA60">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA61" name="quesA6" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA61">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA62" name="quesA6" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA62">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA63" name="quesA6" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA63">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">20. @lang('caseMgmt.attr.ques20') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA70" name="quesA7" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA70">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA71" name="quesA7" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA71">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA72" name="quesA7" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA72">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesA73" name="quesA7" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesA73">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">21. @lang('caseMgmt.attr.ques21') <span class="text-danger">*</span></label></td>
                                        <td><div class="row p-l-20">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD70" name="quesD7" class="custom-control-input" value="0" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD70">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD71" name="quesD7" class="custom-control-input" value="1" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD71">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD72" name="quesD7" class="custom-control-input" value="2" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD72">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD73" name="quesD7" class="custom-control-input" value="3" onclick="calculateDass()" required>
                                                    <label class="custom-control-label" for="quesD73">3</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- <form id="calculateForm">
                            <div class="row p-t-20">
                                <div class="col-3"> 
                                    <div class="form-actions">
                                        <label class="control-label">Calculate Total Score ?</label>
                                        <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="calculateDass()">calculate</button>
                                    </div>
                                </div>
                            </div>
                        </form> -->

                        <div class="row p-t-20">
                            <div class="col-md-3"> 
                                <div class="form-group" hidden>
                                    <label class="control-label">@lang('caseMgmt.attr.depression')</label>
                                    <input type="text" id="depression" class="form-control" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" hidden>
                                    <label class="control-label">@lang('caseMgmt.attr.anxiety')</label>
                                    <input type="text" id="anxiety" class="form-control" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" hidden>
                                    <label class="control-label">@lang('caseMgmt.attr.stress')</label>
                                    <input type="text" id="stress" class="form-control" value="" disabled>
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                    <input type="text" id="remarks" class="form-control">
                                </div>
                            </div> -->
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    function calculateDass() {
    
        var S1 = $('input[name="quesS1"]:checked').val();
        var S2 = $('input[name="quesS2"]:checked').val();
        var S3 = $('input[name="quesS3"]:checked').val();
        var S4 = $('input[name="quesS4"]:checked').val();
        var S5 = $('input[name="quesS5"]:checked').val();
        var S6 = $('input[name="quesS6"]:checked').val();
        var S7 = $('input[name="quesS7"]:checked').val();
        var totalS = parseInt(S1)+parseInt(S2)+parseInt(S3)+parseInt(S4)+parseInt(S5)+parseInt(S6)+parseInt(S7);

        if( totalS >= 1 ){
            document.getElementById("stress").value = totalS;
        }
            

        var D1 = $('input[name="quesD1"]:checked').val();
        var D2 = $('input[name="quesD2"]:checked').val();
        var D3 = $('input[name="quesD3"]:checked').val();
        var D4 = $('input[name="quesD4"]:checked').val();
        var D5 = $('input[name="quesD5"]:checked').val();
        var D6 = $('input[name="quesD6"]:checked').val();
        var D7 = $('input[name="quesD7"]:checked').val();
        var totalD = parseInt(D1)+parseInt(D2)+parseInt(D3)+parseInt(D4)+parseInt(D5)+parseInt(D6)+parseInt(D7);
        
        if( totalS >= 1 ){
        document.getElementById("depression").value = totalD;
        }


        var A1 = $('input[name="quesA1"]:checked').val();
        var A2 = $('input[name="quesA2"]:checked').val();
        var A3 = $('input[name="quesA3"]:checked').val();
        var A4 = $('input[name="quesA4"]:checked').val();
        var A5 = $('input[name="quesA5"]:checked').val();
        var A6 = $('input[name="quesA6"]:checked').val();
        var A7 = $('input[name="quesA7"]:checked').val();
        var totalA = parseInt(A1)+parseInt(A2)+parseInt(A3)+parseInt(A4)+parseInt(A5)+parseInt(A6)+parseInt(A7);
        
        
        if( totalS >= 1 ){
            document.getElementById("anxiety").value = totalA;
        }
    }

</script>


