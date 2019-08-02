<div class="form-group mt-5 row">
    <div class="col-2">
        <label for="example-text-input" class="col-form-label">@lang('ia.attr.insuredPersonConsent')</label>       
    </div>
    <div class="col-2">
        <select class="form-control" id="insuredPersonConsent" name='insuredPersonConsent' onchange="IPConsent(this.options[this.selectedIndex].value)" required>>
            <option value="">Please Select</option>
            <option value="agree">Agree</option>
            <option value="notAgree">Not Agree</option>
            <option value="pending">Pending</option>
        </select>
    </div>         
</div> 

   
<div id="agreeHide" class="form-group" style="display:none">                   
    <div class="form-group row">
        <div class="col-2">    
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.uploadConsentForm')</label>                       
        </div>
        <div class="col-8">
            <input type="file" name="fileToUpload" id="fileToUpload">     
        </div>
    </div>
</div>



{{-- <div class="form-group row">
    <div class="col-2">
        <label for="example-text-input" class="col-form-label">@lang('ia.attr.uploadConsentForm')</label>                       
    </div>
    <div class="col-8">
        <input type="file" name="fileToUpload" id="fileToUpload">     
    </div>
</div>        --}}
  


<div class="form-group row">
    <div class="col-2">
        <label for="example-text-input" class="col-form-label">@lang('ia.attr.dateOfConsent')</label>
    </div>
    <div class="col-2">
        <input class="form-control" type="date"  id="date" >      
    </div>
</div>  

<div class="form-group row">
    <div class="col-2">
        <label for="example-text-input" class="col-form-label">@lang('ia.attr.caseManagerName')</label>
    </div>
    <div class="col-6">
        <input class="form-control" type="text"  id="namaPengurusKes" >
    </div>
</div>



<script type="text/javascript">
function IPConsent(aval) 
{
    if (aval == "agree") 
    {
        $('#agreeHide').show();
    } 
    else 
    {
        $('#agreeHide').hide();
    }

}
</script>