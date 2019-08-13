<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h5 class="card-title">@lang('vaRecommendation.title1')</h5>
                     <hr>
                     <div class="form-actions">
                         <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('vaRecommendation.huraian')</label>
                                <textarea class="form-control" rows="5" type="textarea"  id="jenispersonaliti3"></textarea>
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



