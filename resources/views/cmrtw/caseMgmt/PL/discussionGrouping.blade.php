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
                                <label class="control-label">@lang('caseMgmt.attr.involved_parties')</label>
                                <select name="select_opt" id="select_opt" class="form-control" onchange="myFunctionDiscussGroup(this.options[this.selectedIndex].value)" required> 
                                        <option value="">Please Select</option>
                                        <option value="discuss_cat1">@lang('caseMgmt.attr.involved_parties1')</option>
                                        <option value="discuss_cat2">@lang('caseMgmt.attr.involved_parties2')</option>
                                        <option value="discuss_cat2">@lang('caseMgmt.attr.involved_parties3')</option>
                                        <option value="discuss_cat2">@lang('caseMgmt.attr.involved_parties4')</option>
                                        <option value="discuss_cat2">@lang('caseMgmt.attr.involved_parties5')</option>
                                        <option value="discuss_cat2">@lang('caseMgmt.attr.involved_parties6')</option>
                                        <option value="other">@lang('caseMgmt.attr.others_option')</option>
                                </select>
                            </div>
                    </div>

                    <div class="col-md-6">
                            <div class="form-group">
                                <div id="otherHide" class="form-group" style="display:none">
                                    <label class="control-label">@lang('caseMgmt.attr.specify')</label> 
                                    <input type="text" id="specify" class="form-control" >
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('caseMgmt.attr.supporting_document')</label><br>
                            <span class="choosefile"><input type="file" name=""id="" required>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.discuss_date')</label>
                                <input type="date" id="discuss_date" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.discuss_time')</label>
                                    <input type="time" id="discuss_time" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">@lang('caseMgmt.attr.discuss_place')</label>
                                     <input type="text" id="discuss_place" class="form-control" >
                                 </div>
                            </div> 
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.discuss_purpose')</label>
                                        <input type="text" id="discuss_purpose" class="form-control" >
                                    </div>
                               </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.latest_date')</label>
                                        <input type="date" id="latest_date" class="form-control" disabled>
                                    </div>
                             </div>
                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.latest_time')</label>
                                        <input type="time" id="latest_time" class="form-control" disabled>
                                    </div>
                               </div>  
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.name')</label>
                                        <input type="text" id="name" class="form-control" >
                                    </div>
                               </div>  
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.address')</label>
                                        <input type="text" id="address" class="form-control" >
                                    </div>
                               </div>   
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.email')</label>
                                        <input type="text" id="email" class="form-control" >
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.casemgr_name')</label>
                                        <input type="text" id="casemgr_name" class="form-control" >
                                    </div>
                               </div> 
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.phone_number')</label>
                                        <input type="text" id="phone_number" class="form-control" >
                                    </div>
                               </div> 
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.email')</label>
                                        <input type="text" id="email" class="form-control" >
                                    </div>
                               </div>   
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.discuss_note')</label>
                                        <input type="text" id="discuss_note" class="form-control" >
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

    function myFunctionDiscussGroup(aval) 
        {
            if (aval == "other") 
            {
                $('#otherHide').show();
            } 
            else 
            {
                $('#otherHide').hide();
            }
    
        }
    
    </script>




