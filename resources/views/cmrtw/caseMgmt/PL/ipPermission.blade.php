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
                                                <label class="control-label">@lang('caseMgmt.attr.wsa_permission')</label>
                                                <select name="select_opt" id="select_opt" class="form-control" onchange="showfiel(this.options[this.selectedIndex].value)" required> 
                                                    <option value="">Please Select</option>
                                                    <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                            <option value="no">@lang('caseMgmt.attr.no')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group" id="divspecify123" style="display:none;">
                                                <label class="control-label">@lang('caseMgmt.attr.specify_no')</label>
                                                <select class="form-control">
                                                <option value="">Please Select</option>
                                                <option value="car">@lang('caseMgmt.attr.option_ip')</option>
                                                <option value="car">@lang('caseMgmt.attr.option_geo')</option>
                                                <option value="motorcycle">@lang('caseMgmt.attr.option_quit')</option>
                                                <option value="van">@lang('caseMgmt.attr.option_unreachable')</option>
                                            </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    <script type="text/javascript">
        function showfiel(name){
            if(name == 'no') {
                $('#divspecify123').show();
            }
            else {
                $('#divspecify123').hide();
            }   
        }
        </script>

            

