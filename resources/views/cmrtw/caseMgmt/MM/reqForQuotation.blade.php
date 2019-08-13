<div class="row p-t-20">
        <div class="col-md-4">
            <div class="form-group">
                    <label class="control-label">State</label>
                    <select class="form-control select" required>
                        <option value="">Please Selected</option>
                        <option value="">Johor</option>
                        <option value="">Kedah</option>
                        <option value="">Kelantan</option>
                        <option value="">Melaka</option>
                        <option value="">Negeri Sembilan</option>
                        <option value="">Pahang</option>
                        <option value="">Pulau Pinang</option>
                        <option value="">Perak</option>
                        <option value="">Perlis</option>
                        <option value="">Selangor</option>
                        <option value="">Terengganu</option>
                        <option value="">Sabah</option>
                        <option value="">Sarawak</option>
                        <option value="">W.P. Kuala Lumpur</option>
                        <option value="">W.P. Labuan</option>
                        <option value="">W.P. Putrajaya</option>
                    </select>
            </div>
        </div>                     
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">City</label>
                <select class="form-control select" required>
                    <option value="">Please Selected</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        </div>    
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Supplier Name</label>
                <select class="form-control select" required>
                    <option value="">Please Selected</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        </div>
 </div>

 <div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">Address</label>
            <input type="text" id="initialAssessLoc" class="form-control" readonly>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" id="initialAssessLoc" class="form-control" readonly>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" id="initialAssessLoc" class="form-control" readonly>
        </div>
    </div>
       
 </div> 

 <div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Postcode</label>
            <input type="text" id="initialAssessLoc" class="form-control" readonly>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Mobile Phone No.</label>
            <input type="text" id="initialAssessLoc" class="form-control" readonly>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Office Phone No.</label>
            <input type="text" id="initialAssessLoc" class="form-control" readonly>
        </div>
    </div>
 </div>

 <div class="row p-t-20">  
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Email</label>
            <input type="text" id="initialAssessLoc" class="form-control" readonly>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Start Date</label>
            <input type="date" id="initialAssessLoc" class="form-control" >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">End Date</label>
            <input type="date" id="initialAssessLoc" class="form-control" >
        </div>
    </div>
 </div> 


 <div class="row p-t-20">   
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Quotation Title</label>
            <input type="text" id="initialAssessLoc" class="form-control" >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Item</label>
            <select class="form-control select" id="resultItem" name='resultItem' onchange="xx(this.options[this.selectedIndex].value)" required>
                <option value="">Please Selected</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value="others">Others</option>
            </select>
        </div>
    </div>
 </div>

<div class="row p-t-20"> 
    <div class="col-md-8">
        <div class="form-group">
            <div id="aa" class="form-group" style="display:none">
                <label class="control-label">Remarks</label>
                <textarea class="form-control clearFields" rows="4" type="textarea"  id="reasons"></textarea> 
            </div>
        </div>
    </div>
</div> 




<script type="text/javascript">

    function xx(aval) 
        {
            if (aval == "others") 
            {
                $('#aa').show();
            } 
            else 
            {
                $('#aa').hide();
            }

        }

</script>