




@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@if(Session::get('loginrole') == 'CM')

<!-- Column -->

<div class="col-12">
    <div class="card card-body">
        <h4 class="card-title">Task Inbox</h4>
        <div class="message-box">
            <div class="message-widget">
                <!-- Message -->
                <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-info"><i class="fas fa-list fa-lg"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0"> @isset($workbasketrtw->wbid) @if(empty($workbasketrtw)){{0}}@else{{count($workbasketrtw)}}@endif @endisset </h3>
                                    <h5 class="text-muted m-b-0">New Case</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-warning"><i class="far fa-hand-point-left fa-lg"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">0</h3>
                                    <h5 class="text-muted m-b-0">Query</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-success"><i class="far fa-clock fa-lg"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">0</h3>
                                    <h5 class="text-muted m-b-0">Pending</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>

                {{-- <div class="row p-t-20">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label"><h3>@lang('home.search')</h3></label>
                        </div>
                    </div>

                    <div class="col-md-6"> </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <a href="javascript:void(0)">
                                <div class="mail-contnet text-right">
                                    <h3><b>26</b></h3>
                                    <h5><b>@lang('home.total_task')</b></h5> {{-- <span class="mail-desc">Todays headlines : Breakdancing Grandma Proves ..</span> --}} {{-- </div>
                                </a>
                            </div>
                        </div>
                        
                    </div> --}}
                    {{--  --}}

                    <div class="row p-t-20">

                        <div class="col-md-4">
                            <div class="input-group col-12">
                                <label for="example-text-input" class="col-form-label">Date</label>
                            </div>
                            <div class="input-group col-12">
                                <input class="form-control" type="date" id="date">
                                <div class="input-group-append">
                                    <span class="input-group-text" style="background-color: #d8e8e9;;"><i
                                        class="ti-search"></i></span>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="input-group col-12">
                                    <label for="example-text-input" class="col-form-label">RTW REF NO</label>
                                </div>
                                <div class="input-group col-12">
                                    <input class="form-control" type="text" id="schemerefno">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="background-color: #d8e8e9;"><i
                                            class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group col-12">
                                        <label for="example-text-input" class="col-form-label">ID NO</label>
                                    </div>
                                    <div class="input-group col-12">
                                        <input class="form-control" type="number" id="idno">
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="background-color: #d8e8e9;;"><i
                                                class="ti-search"></i></span>
                                            </div>
                                        </div>

                                    </div>


                                </div> <br><br>

                       {{--  <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('home.date')</label>
                                        <input type="date" id="dateofbirth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('home.rtw_ref_no')</label>
                                        <input type="text" id="rtw_ref_no" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary">@lang('home.search')</button>
                                    </div>
                                </div>
                            </div> --}} 

                               {{--  <h4 class="card-title">Responsive Table </h4>
                               <h6 class="card-subtitle">Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive </code></h6> --}}
                               <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive m-t-40">
                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>@lang('home.select')</th>
                                                    <th>@lang('home.delete')</th>
                                                    <th>WB Id</th>
                                                    <th>@lang('home.aging')</th>
                                                    <th>@lang('home.datereg')</th>
                                                    <th>@lang('home.rtwrefno')</th>
                                                    <th>@lang('home.name')</th>
                                                    <th>@lang('home.icno')</th>
                                                    <th>@lang('home.casestatus')</th>
                                                    <th>Benefit Type</th>

                                                </tr>
                                            </thead>

                                            <tbody class='align-middle'>

                                                @foreach ($workbasketrtw as $wbrtw)
                                                @isset($wbrtw->wbid)

                                                <tr>
                                                    <td><a id='selectdraft' href='/cmrtw.index?rtwrefno={{$wbrtw->rtwrefno}}&wbid={{$wbrtw->wbid}}'><i class="fas fa-edit"></i></a></td>
                                                    <td><a id="deletedraft" onclick="return confirm('Are you sure want to delete the draft?');" ><i class="fas fa-trash-alt fa-sm"></i></a></td>
                                                    <td>{{ $wbrtw->wbid }}</td>
                                                    <td><?php 
                                                    $wbrtwdate = DateTime::createFromFormat('Ymd', ($wbrtw->date));
                                                    $currdate = new DateTime();
                                                    $difference = $currdate->diff($wbrtwdate);
                                                    echo ($difference->d);
                                                    ?></td>
                                                    {{--  <td>{{substr($wb['date'],6,2)}}-{{substr($wb['date'],4,2)}}-{{substr($wb['date'],0,4)}}</td> --}}
                                                    <td>{{substr($wbrtw->date,6,2)}}-{{substr($wbrtw->date,4,2)}}-{{substr($wbrtw->date,0,4)}}</td>
                                                    <td>{{ $wbrtw->rtwrefno }}</td>
                                                    <td>{{ $wbrtw->name }}</td>
                                                    <td>{{ $wbrtw->idno }}</td>
                                                    <td>{{ $wbrtw->descen }}</td> 
                                                    <td><a href="/cmrtw.obForm">Claim Info</a></td>
                                                </tr>
                                               @endisset @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            @endif
            @endsection




