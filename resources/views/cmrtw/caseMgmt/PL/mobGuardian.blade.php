<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">

                        <div id="accordionLesisure" role="tablist" class="accordion" >
                            
                            
                                    <div class="card m-b-0">
                                        <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingMaklumatPengiring">
                                            <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseMaklumatPengiring" aria-expanded="true" aria-controls="collapseMaklumatPengiring">
                                                    <i class="fa fa-plus"></i> @lang('mobGuardian.title1')
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseMaklumatPengiring" class="collapse" role="tabpanel" aria-labelledby="headingMaklumatPengiring">
                                            <div class="card-body">
                                        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('mobGuardian.perlupengiring')</label>
                                                            <select class="form-control select" id="mobiliti">
                                                                <option value="">Please Select </option>
                                                                <option value="kenderaanperkeso">@lang('mobGuardian.ya')</option>
                                                                <option value="tiketpenerbangan">@lang('mobGuardian.tidak')</option>                                     
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('mobGuardian.nama')</label>
                                                            <input type="text" id="nama" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('mobGuardian.nokp')</label>
                                                            <input type="date" id="nokp" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('mobGuardian.notel')</label>
                                                            <input type="text" id="notel" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">       
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('mobGuardian.hubungan')</label>
                                                            <select class="form-control select" id="hubungan"  onchange="myWaris(this.options[this.selectedIndex].value)">
                                                                <option value="">Please Select </option>
                                                                <option value="suamiisteri">@lang('mobGuardian.suamiisteri')</option>
                                                                <option value="ibubapa">@lang('mobGuardian.ibubapa')</option>
                                                                <option value="anak">@lang('mobGuardian.anak')</option>
                                                                <option value="adikberadik">@lang('mobGuardian.adikberadik')</option>
                                                                <option value="waristerdekat">@lang('mobGuardian.waristerdekat')</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="hideWaris" class="form-group" style="display:none"> 
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('mobGuardian.waristerdekat')</label>
                                                                <input type="text" id="waristerdekat" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>



                                    <div class="card m-b-0">
                                        <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingMaklumatPeralatan">
                                            <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseMaklumatPeralatan" aria-expanded="true" aria-controls="collapseMaklumatPeralatan">
                                                    <i class="fa fa-plus"></i> @lang('mobGuardian.title2')
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseMaklumatPeralatan" class="collapse" role="tabpanel" aria-labelledby="headingMaklumatPeralatan">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('mobGuardian.namaperalatan')</label>
                                                            <input type="twxt" id="namaperalatan" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('mobGuardian.kuantiti')</label>
                                                            <input type="text" id="kuantiti" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn waves-effect waves-light btn-success">
                                                SAVE & CONTINUE</button>
                                                <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                                                <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>                           
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



