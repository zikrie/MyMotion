<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     
                     <div class="form-actions">

                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="control-label">@lang('caseMgmt.attr.mob_req')</label>
                                <select class="form-control select" id="mobiliti"  onchange="myMobiliti(this.options[this.selectedIndex].value)">
                                    <option value="">Please Select </option>
                                    <option value="perkeso_vehicle">@lang('caseMgmt.attr.perkeso_vehicle')</option>
                                    <option value="flight_ticket">@lang('caseMgmt.attr.flight_ticket')</option>
                                    <option value="taxi">@lang('caseMgmt.attr.taxi_grab')</option>
                                </select>
                            </div>
                            
                        </div>

                        <div id="hidekenderaanperkeso" class="form-group" style="display:none">
                            <div class="form-group">
                                <h5 class="card-title">@lang('caseMgmt.attr.perkeso_vehicle')</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.destination_from')</label>
                                            <select class="form-control select" id="destination_from">
                                                <option value="">Please Select </option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.destination_to')</label>
                                            <select class="form-control select" id="destination_to">
                                                <option value="">Please Select </option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.vehicle_type')</label>
                                        <input type="text" id="vehicle_type" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.proposedjourney_date')</label>
                                        <input type="date" id="proposedjourney_date" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.actualjourney_date')</label>
                                        <input type="date" id="actualjourney_date" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">@lang('caseMgmt.attr.driver')</label>
                                      <input type="text" id="driver" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.phone_number')</label>
                                         <input type="text" id="phone_number" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.register_vehicle')</label>
                                        <input type="text" id="register_vehicle" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                        <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hidetiketpenerbangan" class="form-group" style="display:none">
                        <div class="form-group">
                          <h5 class="card-title">@lang('caseMgmt.attr.flight_ticket')</h5>
                            <hr>
                             <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingModifiDetails">
                                  <h5 class="mb-0">                           
                                        <a class="link" aria-expanded="true" aria-controls="collapseModifiDetails">
                                             @lang('caseMgmt.attr.depart_flight')
                                        </a>
                                  </h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.proposed_flight')</label>
                                        <input type="date" id="proposed_flight" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.actual_flight')</label>
                                        <input type="date" id="actual_flight" class="form-control" value="">
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.time')</label>
                                        <input type="time" id="time" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.airport_name')</label>
                                        <input type="text" id="airport_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.destination_from')</label>
                                        <select class="form-control select" id="destination_from">
                                            <option value="">Please Select </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.destination_to')</label>
                                        <select class="form-control select" id="destination_to">
                                            <option value="">Please Select </option>
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                        <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingModifiDetails">
                                 <h5 class="mb-0">                           
                                     <a class="link" aria-expanded="true" aria-controls="collapseModifiDetails">
                                          @lang('caseMgmt.attr.return_flight')
                                      </a>
                                </h5>
                            </div>
                            <hr>
                             <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.actual_flight')</label>
                                        <input type="date" id="actual_flight" class="form-control" value="">
                                     </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.time')</label>
                                        <input type="time" id="time" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.airport_name')</label>
                                        <input type="text" id="airport_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.destination_from')</label>
                                        <select class="form-control select" id="destination_from">
                                            <option value="">Please Select </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.destination_to')</label>
                                        <select class="form-control select" id="destination_to">
                                            <option value="">Please Select </option>
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                        <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.freetext')</label>
                                        <input type="text" id="freetext" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.decision')</label>
                                        <select class="form-control select" id="destinasidari">
                                            <option value="">Please Select </option>
                                            <option value="approved">@lang('caseMgmt.attr.approved') </option>
                                            <option value="not_approved">@lang('caseMgmt.attr.not_approved')</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.decision_date')</label>
                                        <input type="date" id="decision_date" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingModifiDetails">
                                 <h5 class="mb-0">                           
                                     <a class="link" aria-expanded="true" aria-controls="collapseModifiDetails">
                                          @lang('caseMgmt.attr.special_req')
                                      </a>
                                </h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                        <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hidetaxi" class="form-group" style="display:none">
                        <div class="form-group">
                            <h5 class="card-title">@lang('caseMgmt.attr.taxi_grab')</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.destination_from')</label>
                                            <select class="form-control select" id="destination_from">
                                                <option value="">Please Select </option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.destination_to')</label>
                                            <select class="form-control select" id="destination_to">
                                                <option value="">Please Select </option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.vehicle_type')</label>
                                        <input type="text" id="vehicle_type" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.journey_date')</label>
                                        <input type="date" id="journey_date" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.phone_number')</label>
                                        <input type="text" id="phone_number" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.promo_code')</label>
                                        <input type="text" id="promo_code" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                        <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">
                        SAVE & CONTINUE</button>
                        <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                        <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



