<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                        
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive m-t-40">
                                            <table id="example231" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>@lang('caseMgmt.attr.no')</th>
                                                        <th>@lang('caseMgmt.attr.rehab_plan')</th>
                                                        <th>@lang('caseMgmt.attr.start_time_suggest')</th>
                                                        <th>@lang('caseMgmt.attr.estimation_cost')</th>
                                                        <th>@lang('caseMgmt.attr.status')</th>   
                                                    </tr>
                                                </thead>                                              
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>WSA</td>
                                                        <td>19/03/2019</td>
                                                        <td>500</td>
                                                        <td>Active</td>                                                              
                                                    </tr>  
                                                    <tr>
                                                            <td>2</td>
                                                            <td>FCE</td>
                                                            <td>19/04/2019</td>
                                                            <td>500</td>
                                                            <td>Active</td>                                                              
                                                        </tr>                                                      
                                                </tbody>
                                            </table>   
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
    
    
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.wsa')</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fce" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.fce')</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#prm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.prm')</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.mm')</span></a> </li>                 
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vtm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.vtm')</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jp" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.jp')</span></a> </li>       
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#va" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">VA</span></a> </li>          
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mobility" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Mobility</span></a> </li>              
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#osm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">OSM/PSM/OPM</span></a> </li>              
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#business" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Business/Financial Support</span></a> </li>              
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#discussion" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Discussion</span></a> </li>              
                                    </ul>
    
                                    <div class="tab-content tabcontent-border">
    
    
                                        {{-- WSA --}}
                                        <div class="tab-pane p-20" id="wsa" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexWSA') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>


                                        {{-- FCE --}}
                                        <div class="tab-pane p-20" id="fce" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexFCE') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>

                                        {{-- PRM --}}
                                        <div class="tab-pane p-20" id="prm" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexPRM') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>

                                        {{-- MM --}}
                                        <div class="tab-pane p-20" id="mm" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.MM.indexMM') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>





                                        {{-- VTM --}}
                                        <div class="tab-pane p-20" id="vtm" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexVTM') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>
            

                                        {{-- JP --}}
                                        <div class="tab-pane p-20" id="jp" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexJP') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>
            
            
                                        {{-- VA --}}
                                        <div class="tab-pane p-20" id="va" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexVA') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>


                                        {{-- VA --}}
                                        <div class="tab-pane p-20" id="mobility" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexMobility') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>
            

                                      
                                                            
                                                         
                                                            
                                                            


                                        {{-- OSM --}}
                                        <div class="tab-pane p-20" id="osm" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexOSM') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>

   
                                        {{-- BUSINESS --}}
                                        <div class="tab-pane p-20" id="business" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexBUSINESS') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>


                                        {{-- DISCUSSION --}}
                                        <div class="tab-pane p-20" id="discussion" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexDISCUSSION') 
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
    </div>
    