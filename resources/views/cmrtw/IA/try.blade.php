<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body wizard-content">
                <form action="#" class="tab-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Offer Confirmation</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.resource')</label>
                                    <select class="form-control select" id="bankloc" name='bankloc' onchange="offerConfirm(this.options[this.selectedIndex].value)" required>
                                        <option value="">Please Select</option>
                                        <option value="Letter">@lang('offerconfirmation.attr.letter')</option>
                                        <option value="Email">@lang('offerconfirmation.attr.email')</option>
                                        <option value="Telephone">@lang('offerconfirmation.attr.telephone')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- letter -->
                                    <div id="letterHide" class="form-group" style="display:none">
                                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.letterdate')</label>
                                        <input class="form-control selectLetter" type="date"  id="letterdate">
                                    </div>
                                    <!-- email -->
                                    <div id="emailHide" class="form-group" style="display:none">
                                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.emaildate')</label>
                                        <input class="form-control selectEmail" type="date"  id="emaildate">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <!-- call -->
                                    <div id="callHide" class="form-group" style="display:none">
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbyob')</label>
                                            </div>
                                            <div class="col-md-5">
                                                    <label>@lang('offerconfirmation.attr.date')</label>
                                                    <input type="date" class="form-control selectCall">
                                            </div>
                                            <div class="col-md-5">
                                                    <label>@lang('offerconfirmation.attr.time')</label>
                                                    <input type="time" class="form-control selectCall">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.personincharged')</label>
                                                    <input type="text" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.cmname')</label>
                                                    <input type="text" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-2">
                                                <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbycm')</label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.date')</label>
                                                    <input type="date" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.time')</label>
                                                    <input type="time" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.obname')</label>
                                                    <input type="text" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.detailconfirmation')</label>
                                    <div class="form-group">
                                        <select class="form-control select" id="result" name='result' onchange="myFunction(this.options[this.selectedIndex].value)" required>
                                            <option value="">@lang('offerconfirmation.attr.result')</option>
                                            <option value="Yes">@lang('offerconfirmation.attr.yes')</option>
                                            <option value="No">@lang('offerconfirmation.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <div id="hideResult" class="form-group" style="display:none">
                                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.reasons')</label>
                                        <textarea class="form-control" rows="5" type="textarea"  id="reasons"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h6>Appointment</h6>
                    <section>
                        <div class="row">
                            <div class="card-body b-l calender-sidebar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="modal none-border" id="my-event">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><strong>Set Appointment with Insured Person</strong></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Add Appointment</button>
                                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="modal fade none-border" id="add-new-event">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="control-label">Category Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="time" name="category-name" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Choose Place</label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                            <option value="success">Insured Person House</option>
                                                            <option value="success">Perkeso Branch</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </section>
                    <!-- Step 3 -->
                    
                    <!-- Step 4 -->
                    <h6>Initial Assessment</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-11">
                                @include('cmrtw.IA.initialevaluation')
                            </div>
                        </div>
                    </section>
                    <h6>Rehab Plan</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-11">
                                @include('cmrtw.IA.rehabplan')
                            </div>
                        </div>
                    </section>

                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    function offerConfirm(aval) {
        if (aval == "Letter") {
            $('#letterHide').show();
            $('#emailHide').hide();
            $('#callHide').hide();
            
        } 
        else if (aval == "Email"){
            $('#emailHide').show();
            $('#letterHide').hide();
            $('#callHide').hide();
        }
        else if (aval == "Telephone"){
            $('#callHide').show();
            $('#emailHide').hide();
            $('#letterHide').hide();
        }
        else {
            $('#callHide').hide();
            $('#emailHide').hide();
            $('#letterHide').hide();
        }
    }
    function myFunction(aval) {
        if (aval == "No") {
            $('#hideResult').show();   
        }
        else {
            $('#hideResult').hide(); 
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#calendarTab').on('shown.bs.tab', function (e) {
            $('#calendar').fullCalendar('render');
        });
    });

    //redirect to specific tab
    $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
</script>