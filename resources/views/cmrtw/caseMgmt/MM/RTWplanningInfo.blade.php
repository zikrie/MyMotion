<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Plan Start Date</label>
            <input type="date" id="initialAssessTime" class="form-control" >
        </div>
    </div>                     
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Status Plan</label>
            <select class="form-control select " id="resultStatusPlan" name='resultStatusPlan' onchange="myFunctionStatusPlan(this.options[this.selectedIndex].value)" required>
                <option value="">Please Selected</option>
                <option value="new">New</option>
                <option value="inAction">In Action</option>
                <option value="cancel">Cancel</option>
                <option value="done">Done</option>
            </select>
        </div> 
    </div>
    {{-- <div class="col-md-4">
            <button class=" btn-success" data-toggle="collapse"
                data-target="#collapseTwo2,#collapse3" aria-expanded="true"
                aria-controls="collapseTwo2">
                Next
            </button>
    </div> --}}
</div>

<div class="row p-t-20">
    <div class="col-md-8">
        <div class="form-group">
            <div id="cancelHide" class="form-group" style="display:none">
                <label class="control-label">Remarks Cancel</label> 
               <textarea class="form-control clearFields" rows="5" type="textarea"  id="reasons"></textarea> 
            </div>
        </div>
    </div>
</div>






<script type="text/javascript">

function myFunctionStatusPlan(aval) 
    {
        if (aval == "cancel") 
        {
            $('#cancelHide').show();
        } 
        else 
        {
            $('#cancelHide').hide();
        }

    }

</script>