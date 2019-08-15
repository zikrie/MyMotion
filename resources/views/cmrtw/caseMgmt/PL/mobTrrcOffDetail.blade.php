<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h5 class="card-title">@lang('mobTrrcOffDetail.title1')</h5>
                     <hr>
                     <div class="form-actions">
                     <div class="row">  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobTrrcOffDetail.nama')</label>
                                <input type="text" id="nama" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobTrrcOffDetail.notel')</label>
                                <input type="text" id="notel" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                     <div class="row">  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobTrrcOffDetail.email')</label>
                                <input type="text" id="email" class="form-control" value="">
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



