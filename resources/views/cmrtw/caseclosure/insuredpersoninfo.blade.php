<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h4 class="card-title">Insured Person Info</h4>
                     <hr>
                     <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Name<span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">New Identification No.<span class="text-danger">*</span></label>
                                    <input type="text" id="ic" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email<span class="text-danger">*</span></label>
                                    <input type="text" id="email" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Telephone No.<span class="text-danger">*</span></label>
                                    <input type="text" id="telno" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">
                        SAVE & CONTINUE</button>
                        <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                        <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>



