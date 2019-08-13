<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
    
                                <div id="accordionLesisure" role="tablist" class="accordion" >
                                    <div class="card m-b-0">
                                        <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingsuppInfoSelected">
                                            <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordionsuppInfoSelected" href="#collapsesuppInfoSelected" aria-expanded="true" aria-controls="collapsesuppInfoSelected">
                                                    <i class="fa fa-plus"></i> Supplier Details Selected
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapsesuppInfoSelected" class="collapse" role="tabpanel" aria-labelledby="headingsuppInfoSelected">
                                            <div class="card-body">
                                                
                                                <div class="row p-t-20">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Supplier Name</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control"  readonly>
                                                        </div>
                                                    </div>    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">State</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div>  
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">City</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div>      
                                                </div>

                                                <div class="row p-t-20">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">       
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <div class="form-group">                                                 
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Postcode</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Mobile Phone No.</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Ofiice Phone No.</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Email</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Start Date</label>
                                                            <input type="date" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">End Date</label>
                                                            <input type="date" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Justify Election</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Quotation</label>
                                                            <input type="text" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Total Price(RM)</label>
                                                            <input type="date" id="initialAssessLoc" class="form-control" readonly >
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="row p-t-20"> 
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Offer Acceptance</label>
                                                            <div class="custom-control custom-radio" required>
                                                                <input type="radio" id="yes33" name="yes212" class="custom-control-input" onclick="yesOfferAccept()">
                                                                <label class="custom-control-label" for="yes33">Yes</label>
                                                            </div>
                                                            <div class="custom-control custom-radio" required>
                                                                <input type="radio" id="no33" name="yes212" class="custom-control-input" onclick="noOfferAccept()">
                                                                <label class="custom-control-label" for="no33">No</label>
                                                            </div>
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                             <div id="hideOfferAccept" class="form-group" style="display:none">
                                                                <label class="control-label">Rejection reason</label>
                                                                <textarea class="form-control clearFields" rows="2" type="textarea"  id="reasons"></textarea>
                                                             </div>
                                                        </div>
                                                    </div> 
                                                </div>


                                                <div class="row p-t-20">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Offer Receipt Date</label>
                                                            <input type="date" id="initialAssessLoc" class="form-control"  >
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Offer Letter</label>
                                                            <span class="choosefile"><input type="file" required></span>
                                                        </div>
                                                    </div> 
                                                   
                                                   
                                                </div>
                                   
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <br>
    
                                    <div class="card m-b-0">
                                        <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingItemDetails">
                                            <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseItemDetails" aria-expanded="false" aria-controls="collapseItemDetails">
                                                    <i class="fa fa-plus"></i> Item Details
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseItemDetails" class="collapse" role="tabpanel" aria-labelledby="headingItemDetails">
                                            <div class="card-body">
                                                <div class="row p-t-20">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Item</label>
                                                            <input type="text" id="initialAssessTime" class="form-control"  >
                                                        </div>
                                                    </div>   
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Price</label>
                                                                <div class="input-group" required>
                                                                    <input type="text" id="initialAssessTime" class="form-control"  >
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-success" type="button" onclick="addItemDetails();"><i class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>                       
                                                </div> 
                                                <div id="addItemDet"></div> 
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
    
    
    
    <script type="text/javascript">
    
        function noOfferAccept() {
                $('#hideOfferAccept').show();
        }
        function yesOfferAccept() {
                $('#hideOfferAccept').hide();
        }
    </script>
    