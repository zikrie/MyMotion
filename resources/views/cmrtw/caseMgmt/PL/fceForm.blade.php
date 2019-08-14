<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                            <div class="row p-t-20">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.cat_demand')</label>
                                                <input type="text" id="cat_demand" class="form-control" disabled >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.sub_cat')</label>
                                                <input type="text" id="sub_cat" class="form-control" disabled >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.worktask')</label>
                                                <input type="text" id="worktask" class="form-control" disabled >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.frequency')</label>
                                                <div>
                                                        <label class="radio-inline">
                                                          <input type="radio" name="optradio" checked>@lang('caseMgmt.attr.frequency1')
                                                        </label>
                                                        <label class="radio-inline">
                                                          <input type="radio" name="optradio">@lang('caseMgmt.attr.frequency2')
                                                        </label>
                                                        <label class="radio-inline">
                                                          <input type="radio" name="optradio">@lang('caseMgmt.attr.frequency3')
                                                        </label>
                                                        <label class="radio-inline">
                                                                <input type="radio" name="optradio">@lang('caseMgmt.attr.frequency4')
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.characteristic')</label>
                                                <input type="text" id="characteristic" class="form-control" disabled >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.ability')</label>
                                                    <div>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" checked>@lang('caseMgmt.attr.ability1')
                                                      </label>
                                                      <label class="radio-inline">
                                                        <input type="radio" name="optradio">@lang('caseMgmt.attr.ability2')
                                                      </label>
                                                      <label class="radio-inline">
                                                        <input type="radio" name="optradio">@lang('caseMgmt.attr.ability3')
                                                      </label>
                                                      <label class="radio-inline">
                                                              <input type="radio" name="optradio">@lang('caseMgmt.attr.ability4')
                                                      </label>
                                              </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('caseMgmt.attr.limitation_desc')</label>
                                                    <div>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="optradio" checked>@lang('caseMgmt.attr.limitation_desc1')
                                                          </label>
                                                          <label class="radio-inline">
                                                            <input type="radio" name="optradio">@lang('caseMgmt.attr.limitation_desc2')
                                                          </label>
                                                          <label class="radio-inline">
                                                            <input type="radio" name="optradio">@lang('caseMgmt.attr.limitation_desc3')
                                                          </label>
                                                          <label class="radio-inline">
                                                                  <input type="radio" name="optradio">@lang('caseMgmt.attr.limitation_desc4')
                                                          </label>
                                                  </div>
                                                    </div>
                                                </div>
        
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.scoring')</label>
                                                            <input type="text" id="scoring" class="form-control" disabled >
                                                        </div>
                                                </div>
        
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.desc_wsa')</label>
                                                            <input type="text" id="desc_wsa" class="form-control" disabled >
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.assessment_review')</label>
                                                            <input type="text" id="assessment_review" class="form-control" disabled >
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.position')</label>
                                                            <input type="text" id="position" class="form-control" disabled >
                                                        </div>
                                                </div>
                                    </div>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
        
        
        
            
        
        