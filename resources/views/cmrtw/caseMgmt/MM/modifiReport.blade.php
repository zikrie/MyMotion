<div class="row p-t-20">
        <div class="col-md-4">
            <div class="form-group">
                    <label class="control-label">Report Review</label>
                    <input type="text" id="initialAssessLoc" class="form-control" readonly>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Supporting Document</label>
                <span class="choosefile"><input type="file" required></span>
            </div>         
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Report Date</label>
                <input type="date" id="initialAssessLoc" class="form-control"  readonly>
            </div>         
        </div>
 </div>
 <div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Modified Implementation Status</label>
            <select class="form-control select" required>
                <option value="">Please Selected</option>
                <option value="">Done</option>
                <option value="">Not Done</option>  
            </select>
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