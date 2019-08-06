 <ul class="nav customtab " role="tablist">
            
                    
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#plan_list" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Plan List</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#gl" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">GL</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rehab_al" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Rehab rehabAllowance </span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#case_note" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Case Note</span></a> </li>
                     
                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#case_status" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Case Status</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supporting_document" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Supporting Documents</span></a> </li>
                  
</ul>

    <div class="tab-content tabcontent-border">

                    <div class="tab-pane p-20" id="plan_list" role="tabpanel">
                      @include('cmrtw.caseMgmt.planList')
                    </div>

                     <div class="tab-pane p-20" id="gl" role="tabpanel">
                      @include('cmrtw.caseMgmt.GL.glList')
                    </div>

                    <div class="tab-pane p-20" id="rehab_al" role="tabpanel">
                      @include('cmrtw.caseMgmt.rehabAllowance')
                    </div>

                    <div class="tab-pane p-20" id="case_note" role="tabpanel">
                        @include('cmrtw.caseMgmt.caseNote')
                    </div>

                    <div class="tab-pane p-20" id="case_status" role="tabpanel">
                        @include('cmrtw.caseMgmt.caseStatus')
                    </div>

                    <div class="tab-pane p-20" id="supporting_document" role="tabpanel">
                        @include('cmrtw.caseMgmt.supportDoc')
                    </div>


               
    </div>







          

