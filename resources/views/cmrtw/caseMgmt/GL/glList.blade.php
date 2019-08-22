<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                       
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div id="accordion2" role="tablist" class="accordion" >
                  
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingGLletter" style="background-color: #FFFFFF;">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseGLletter" aria-expanded="false" aria-controls="collapseGLletter">
                                            <h5 class="card-title" ><i class="fa fa-plus"></i>
                                            @lang('caseMgmt.attr.gl_letter')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseGLletter" class="collapse" role="tabpanel" aria-labelledby="headingGLletter">
                                    <div class="card-body">
                                        <div id="accordionLesisure" role="tablist" class="accordion" >
                                            
                                            <div class="card m-b-0">
                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingpreviousGL ">
                                                    <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionSupplierGL" href="#collapsepreviousGL" aria-expanded="true" aria-controls="collapsepreviousGL">
                                                            <i class="fa fa-plus"></i>   @lang('caseMgmt.attr.previous_gl')
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsepreviousGL" class="collapse" role="tabpanel" aria-labelledby="headingpreviousGL">
                                                    <div class="card-body">
                                                    @include('cmrtw.caseMgmt.GL.previousGl') 
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="card m-b-0">
                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingGLdetails ">
                                                    <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionSupplierGL" href="#collapseGLdetails" aria-expanded="true" aria-controls="collapseGLdetails">
                                                            <i class="fa fa-plus"></i>  @lang('caseMgmt.attr.gl_letter')
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseGLdetails" class="collapse" role="tabpanel" aria-labelledby="headingGLdetails">
                                                    <div class="card-body">
                                                        @include('cmrtw.caseMgmt.GL.glDetails')
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                                                                       
                                            <div class="card m-b-0">
                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingSupplierGL ">
                                                    <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionSupplierGL" href="#collapseSupplierGL" aria-expanded="true" aria-controls="collapseSupplierGL">
                                                            <i class="fa fa-plus"></i>  @lang('caseMgmt.attr.sp_details')
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseSupplierGL" class="collapse" role="tabpanel" aria-labelledby="headingSupplierGL">
                                                    <div class="card-body">
                                                        @include('cmrtw.caseMgmt.GL.serviceProDetails')    
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingTwo2" style="background-color: #FFFFFF;">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('caseMgmt.attr.recommend_cm')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                    <div class="card-body">
                                        @include('cmrtw.caseMgmt.GL.recommendCM')
                                    </div>
                                </div>
                            </div>

                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingThree3" style="background-color: #FFFFFF;" >
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3"><h5 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('caseMgmt.attr.scm_approval')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3">
                                    <div class="card-body">
                                        @include('cmrtw.caseMgmt.GL.scmhqApproval')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


