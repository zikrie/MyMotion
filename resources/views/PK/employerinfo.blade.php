<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                        <h4 class="card-title">@lang('registrationRTW.title2')</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.compname')</label>
                                    <input type="text" id="name" class="form-control" value="@if(!empty($data)){{ $data->empname }} @endif">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('registrationRTW.attr.address')</label>
                                    <input type="text" class="form-control" value="@if(!empty($data)){{ $data->empadd1 }} @endif" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    <input type="text" class="form-control" value="@if(!empty($data)){{ $data->empadd2 }} @endif">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('registrationRTW.attr.city')</label>
                                    <input type="text" class="form-control" value="@if(!empty($data)){{ $data->empcity}} @endif">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.state')</label>
                                    <select name='state' id='state' class='form-control'>
                                        <option>Please Select</option>
                                        @foreach($state as $s)
                                        @if(!empty($data) && $data->statecode == $s->refcode)
                                        <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                        @else
                                        <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('registrationRTW.attr.postcode')</label>
                                    <input type="text" class="form-control" value="@if(!empty($data)){{ $data->emppostcode }} @endif">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('registrationRTW.attr.telNo')</label>
                                    <input type="text" class="form-control" value="@if(!empty($data)){{ $data->emptelno }} @endif">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('registrationRTW.attr.faxno')</label>
                                    <input type="text" class="form-control" value="@if(!empty($data)){{ $data->empfaxno }} @endif">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('registrationRTW.attr.email')</label>
                                    <input type="text" class="form-control" value="@if(!empty($data)){{ $data->empemail }} @endif">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-7"> 
                                    <label for="example-text-input" class="col-form-label">@lang('registrationRTW.attr.inservice')</label>
                                </div>
                                <label class="btn btn-primary">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="yes" name="yesno" class="custom-control-input">
                                        <label class="custom-control-label" for="yes">@lang('registrationRTW.attr.yes')</label>
                                    </div>
                                </label>
                                <label class="btn btn-primary">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="no" name="yesno" class="custom-control-input">
                                        <label class="custom-control-label" for="no">@lang('registrationRTW.attr.no')</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="form-action">
                            <a href=/homertw><button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('registrationRTW.cancel')</button></a>

                            <a class="btn waves-effect waves-light btn-success text-white" href="{{ route('preview') }}">PREVIEW</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



