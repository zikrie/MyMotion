            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="#">
                                <div class="form-body">

                                    {{-- <div class="row p-t-20">

                                    </div> --}}
                                    <!-- Column -->
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
                                                                    
                                                                    {{-- @foreach ($workbasket as $wb) --}}
                                                                    {{-- <tr> --}}
                                                                        {{-- <td>{{ $wb->wbid }}</td> --}}
                                                                        {{-- <td>{{substr($wb->date,6,2)}}-{{substr($wb->date,4,2)}}-{{substr($wb->date,0,4)}}</td> --}}
                                                                        {{-- <td>{{ $datediff }}</td> --}}
                                                                        {{-- <td>{{ $wb->time }}</td> --}}
                                                                        {{-- <td>{{ $wb->rtwrefno }}</td> --}}
                                                                        {{-- <td>{{ $wb->schemerefno }}</td> --}}
                                                                        {{-- <td>{{ $wb->caseid }}</td> --}}
                                                                        {{-- <td>{{ $wb->revisionrefno }}</td> --}}
                                                                        {{-- <td>{{ $wb->medrefno }}</td> --}}
                                                                        {{-- <td>{{ $wb->descen }}</td> --}}
                                                                    {{-- </tr> --}}
                                                                    {{-- @endforeach --}}


                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        {{-- <td>{{ $datediff }}</td> --}}
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

                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#financial" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.financial')</span></a> </li>
                                    
                        
                                </ul>

                                <div class="tab-content tabcontent-border">

                                    <div class="tab-pane p-20" id="wsa" role="tabpanel">
                                    <ul class="nav customtab" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#permission" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Permission</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#job_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Job Details</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#discussion" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Appointment Trip</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#support_doc" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">WSA Form</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#support_doc" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">WSA Report</span></a> </li>
                                    </ul>

                                    

                                        </div>
                    
                                        <div class="tab-pane p-20" id="fce" role="tabpanel">
                                        {{-- @include('cmrtw.caseMgmt.guaranteeLetter') --}}
                                        </div>
                    
                                        <div class="tab-pane p-20" id="prm" role="tabpanel">
                                        {{-- @include('cmrtw.caseMgmt.rehabAllowance') --}}
                                        </div>
                    
                                        <div class="tab-pane p-20" id="mm" role="tabpanel">
                                            {{-- @include('cmrtw.caseMgmt.caseNote') --}}
                                        </div>
                    
                                        <div class="tab-pane p-20" id="vtm" role="tabpanel">
                                            {{-- @include('cmrtw.caseMgmt.caseStatus') --}}
                                        </div>
                    
                                        <div class="tab-pane p-20" id="jp" role="tabpanel">
                                            {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                        </div>

                                        <div class="tab-pane p-20" id="financial" role="tabpanel">
                                            {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                        </div>
                    
                    
                                
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
