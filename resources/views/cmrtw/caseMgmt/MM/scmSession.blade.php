<div class="row p-t-20">
        <div class="col-md-4">
            <div class="form-group">
                    <label class="control-label">Recommendations</label>
                    <select class="form-control select" id="Recommendations" name='Recommendations' onchange="myFunctionreqRecommendations(this.options[this.selectedIndex].value)" required>
                        <option value="">Please Selected</option>
                        <option value="recommend">Recommend</option>
                        <option value="pending">Pending</option>
                    </select>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="form-group">
                <div id="hidePending" class="form-group" style="display:none">
                    <label class="control-label">Remarks</label>
                    <input type="text" id="initialAssessLoc" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Recommendation Name</label>
                <input type="text" id="initialAssessLoc" class="form-control"  readonly>
            </div>         
        </div>
 </div>


 <div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Recommendation Date</label>
            <input type="date" id="initialAssessLoc" class="form-control"  readonly>
        </div>         
    </div>
 </div>


<script type="text/javascript">

    function myFunctionreqRecommendations(aval) 
        {
            if (aval == "pending") 
            {
                $('#hidePending').show();
            } 
            else 
            {
                $('#hidePending').hide();
            }

        }

</script>