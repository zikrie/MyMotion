<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h5 class="card-title">@lang('mobMobiliti.title1')</h5>
                     <hr>
                     <div class="form-actions">

                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="control-label">@lang('mobMobiliti.keperluanmobiliti')</label>
                                <select class="form-control select" id="mobiliti"  onchange="myMobiliti(this.options[this.selectedIndex].value)">
                                    <option value="">Please Select </option>
                                    <option value="kenderaanperkeso">@lang('mobMobiliti.kenderaanperkeso')</option>
                                    <option value="tiketpenerbangan">@lang('mobMobiliti.tiketpenerbangan')</option>
                                    <option value="taxi">@lang('mobMobiliti.taxi')</option>
                                </select>
                            </div>
                            
                        </div>

                        <div id="hidekenderaanperkeso" class="form-group" style="display:none">
                            <div class="form-group">
                                <h5 class="card-title">@lang('mobMobiliti.title2')</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('mobMobiliti.destinasidari')</label>
                                            <select class="form-control select" id="destinasidari">
                                                <option value="">Please Select </option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('mobMobiliti.destinasike')</label>
                                            <select class="form-control select" id="destinasike">
                                                <option value="">Please Select </option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.jeniskenderaan')</label>
                                        <input type="text" id="jeniskenderaan" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.tarikhcadangan')</label>
                                        <input type="date" id="tarikhcadangan" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.tarikhsebenar')</label>
                                        <input type="date" id="tarikhsebenar" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">@lang('mobMobiliti.pemandu')</label>
                                      <input type="text" id="pemandu" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.notelefon')</label>
                                         <input type="text" id="notelefon" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.nopendaftaran')</label>
                                        <input type="text" id="nopendaftaran" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.remark')</label>
                                        <input type="text" id="remark" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hidetiketpenerbangan" class="form-group" style="display:none">
                        <div class="form-group">
                          <h5 class="card-title">@lang('mobMobiliti.title3')</h5>
                            <hr>
                             <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingModifiDetails">
                                  <h5 class="mb-0">                           
                                        <a class="link" aria-expanded="true" aria-controls="collapseModifiDetails">
                                             @lang('mobMobiliti.penerbanganpergi')
                                        </a>
                                  </h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.tarikhcadanganpenerbangan')</label>
                                        <input type="date" id="tarikhcadanganpenerbangan" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.tarikhsebenarpenerbangan')</label>
                                        <input type="date" id="tarikhsebenarpenerbangan" class="form-control" value="">
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.masa')</label>
                                        <input type="time" id="masa" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.lapanganterbang')</label>
                                        <input type="text" id="lapanganterbang" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.destinasidari')</label>
                                        <select class="form-control select" id="destinasidari">
                                            <option value="">Please Select </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.destinasike')</label>
                                        <select class="form-control select" id="destinasike">
                                            <option value="">Please Select </option>
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.remark')</label>
                                        <input type="text" id="remark" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingModifiDetails">
                                 <h5 class="mb-0">                           
                                     <a class="link" aria-expanded="true" aria-controls="collapseModifiDetails">
                                          @lang('mobMobiliti.penerbanganbalik')
                                      </a>
                                </h5>
                            </div>
                            <hr>
                             <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.tarikhsebenarpenerbangan')</label>
                                        <input type="date" id="tarikhsebenarpenerbangan" class="form-control" value="">
                                     </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.masa')</label>
                                        <input type="time" id="masa" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.lapanganterbang')</label>
                                        <input type="text" id="lapanganterbang" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.destinasidari')</label>
                                        <select class="form-control select" id="destinasidari">
                                            <option value="">Please Select </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.destinasike')</label>
                                        <select class="form-control select" id="destinasike">
                                            <option value="">Please Select </option>
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.remark')</label>
                                        <input type="text" id="remark" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.minitbebas')</label>
                                        <input type="text" id="minitbebas" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.keputusan')</label>
                                        <select class="form-control select" id="destinasidari">
                                            <option value="">Please Select </option>
                                            <option value="">@lang('mobMobiliti.lulus') </option>
                                            <option value="">@lang('mobMobiliti.tidaklulus')</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.tarikhkeputusan')</label>
                                        <input type="date" id="tarikhkeputusan" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingModifiDetails">
                                 <h5 class="mb-0">                           
                                     <a class="link" aria-expanded="true" aria-controls="collapseModifiDetails">
                                          @lang('mobMobiliti.keperluankhas')
                                      </a>
                                </h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.remark')</label>
                                        <input type="text" id="remark" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hidetaxi" class="form-group" style="display:none">
                        <div class="form-group">
                            <h5 class="card-title">@lang('mobMobiliti.title4')</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('mobMobiliti.destinasidari')</label>
                                            <select class="form-control select" id="destinasidari">
                                                <option value="">Please Select </option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('mobMobiliti.destinasike')</label>
                                            <select class="form-control select" id="destinasike">
                                                <option value="">Please Select </option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.jeniskenderaan')</label>
                                        <input type="text" id="jeniskenderaan" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.tarikhperjalanan')</label>
                                        <input type="date" id="tarikhperjalanan" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.notelefon')</label>
                                        <input type="text" id="notelefon" class="form-control" value="">
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.promocode')</label>
                                        <input type="text" id="promocode" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('mobMobiliti.remark')</label>
                                        <input type="text" id="remark" class="form-control" value="">
                                    </div>
                                </div>
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



