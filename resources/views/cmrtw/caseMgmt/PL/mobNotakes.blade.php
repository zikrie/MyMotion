<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h5 class="card-title">@lang('mobNotakes.title1')</h5>
                     <hr>
                     <div class="form-actions">
                        <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobNotakes.tarikhaktiviti')</label>
                                <input type="date" id="tarikhaktiviti" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobNotakes.plan')</label>
                                <input type="text" id="plan" class="form-control" value="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobNotakes.perkara')</label>
                                <input type="text" id="perkara" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobNotakes.ulasan')</label>
                                <input type="text" id="ulasan" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobNotakes.dokumensokongan')</label>
                                <input type="text" id="dokumensokongan" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobNotakes.dikemaskinioleh')</label>
                                <input type="text" id="dikemaskinioleh" class="form-control" value="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobNotakes.dikemaskinipada')</label>
                                <input type="text" id="dikemaskinipada" class="form-control" value="" disabled>
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



