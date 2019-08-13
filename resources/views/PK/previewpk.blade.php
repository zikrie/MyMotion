@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
            <br/>
            <br/>
        <div class="card">
            <div class="card-body">
                 <form action="/registrationrtw" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">

                        
                        <h5 class="card-title">Insured Person Details</h5>
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <hr>

                        <hr class="m-t-0 m-b-40">
                        <table id="div_preview" border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label">Name</td>
                                    <td>:</td>                            
                                    <td>{{session::get('name')}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Identification Type</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                        {{-- {{session::get('idtype')}} --}}
                                 
                                </td>
                                </tr>

                                <tr>
                                    <td class="control-label">Identification No.</td>
                                    <td>:</td>                            
                                    <td>{{session::get('idno')}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Date of Birth</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                            {{session::get('dob')}}
                                    </td>  
                                </tr>


                                <tr>
                                    <td class="control-label">Race</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left" >
                                       @foreach($race as $id)
                                        @if (session::get('race') == $id->refcode)
                                            {{$id->descen}}
                                        @endif
                                       @endforeach
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Gender</td>
                                    <td>:</td>
                                     <td class="control-label text-left" > 
                                        @if (session::get('gender') == 'F')
                                        Female 
                                        @else
                                        Male
                                        @endif
                                    {{-- {{$obprofile->gender}} --}}
                                    
                                       {{-- @if (!empty($obprofile) && $obprofile->gender == "F")
                                            <label class="control-label text-right ">Female</label>
                                       @else
                                            <label class="control-label text-right ">Male</label>
                                       @endif  --}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="control-label">Occupation</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                        {{session::get('occupation')}}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Address</td>
                                    <td>:</td>
                                     <td class="control-label" >
                                            <label class="control-label text-right "></label>
                                            {{session::get('add1')}}
                                            {{-- <br><label class="control-label text-right ">{{ $obprofile->add2 }} </label>
                                            <br><label class="control-label text-right ">{{ $obprofile->add3 }}  </label> --}}
                                                
                                    </td>
                                </tr>

                                <tr>
                                    <td class="control-label">City</td>
                                    <td>:</td>                            
                                   <td class="control-label text-left">
                                           {{session::get('city')}}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><label class="control-label text-right "></label></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td class="control-label">State</td>
                                    <td>:</td> 
                                     <td class="control-label text-left">
                                        @foreach($state as $id)
                                        @if (session::get('statecode') == $id->refcode)
                                            {{$id->descen}}
                                        @endif
                                       @endforeach
                                    </td>                           
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>

                                <tr>
                                    <td class="control-label">Postcode</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left" >
                                        {{session::get('postcode')}}
                                </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Mobile No</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                        {{session::get('mobileno')}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="control-label">Telephone No.</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left" >
                                        {{session::get('telno')}}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Email Address</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                        {{session::get('email')}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="control-label">Nationality</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                            <label class="control-label text-right ">
                                                   @foreach($national as $id)
                                        @if (session::get('nationality') == $id->refcode)
                                            {{$id->descen}}
                                        @endif
                                       @endforeach
                                                </label>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   {{--  <td class="control-label">Telephone No. </td>
                                    <td>:</td>
                                </tr>

                                <tr>
                                    <td class="control-label">Email Address</td>
                                    <td>:</td>                            
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Nationality</td>
                                    <td>:</td> --}}
                                </tr>
                        </table>  
                </div>
                <br/>
                <br/>





                <div class="form-body">
                        <h5 class="card-title">Employer Details</h5>
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <hr>

                        <hr class="m-t-0 m-b-40">
                        <table id="div_preview" border="0" cellpadding="10px">
                             {{--    <tr>
                                    <td class="control-label">Employer Code</td>
                                    <td>:</td>                            
                                    <td><label class="control-label text-right ">
                                                @if(!empty($emprecord) && $emprecord->empcode != '')
                                                {{$emprecord->empcode}}
                                                @elseif(!empty($employer) && $employer->empcode != '')
                                                {{$employer->empcode}}
                                                @else
                                                @endif
                                        </label>
                                        </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Employer Type</td>
                                    <td>:</td>
                                </tr> --}}

                                <tr>
                                    <td class="control-label">Employer Name</td>
                                    <td>:</td>                            
                                      <td class="control-label text-left">
                                               {{session::get('empname')}}  
                                            </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Address</td>
                                    <td>:</td>
                                     <td class="control-label" >
                                                <label class="control-label text-right ">
                                                       {{session::get('empadd1')}}
                                                </label>
                                            </td> 
                                </tr>


                                <tr>
                                    <td class="control-label">Postcode</td>
                                    <td>:</td>                            
                                     <td class="control-label text-left" >
                                               {{session::get('emppostcode')}}     
                                            </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                               
                                </tr>

                                <tr>
                                    <td class="control-label">State</td>
                                    <td>:</td>                            
                                     <td class="control-label text-left">
                                                @foreach($state as $id)
                                        @if (session::get('statecode') == $id->refcode)
                                            {{$id->descen}}
                                        @endif
                                       @endforeach
                                            </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                
                                </tr>

                                <tr>
                                    <td class="control-label">City</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left" >
                                             {{session::get('empcity')}}      
                                            </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Telephone No.</td>
                                    <td>:</td> 
                                    <td>
                                        {{session::get('emptelno')}}
                                    </td>      
                                </tr>

                                <tr>
                                    <td class="control-label">Fax No.</td>
                                    <td>:</td>                            
                                    <td>
                                   {{session::get('empfaxno')}}
                                    </td>      
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Email</td>
                                    <td>:</td>
                                    <td>
                                    {{session::get('empemail')}}
                                    </td> 
                                </tr>

                                {{-- <tr>
                                    <td class="control-label">E-mail</td>
                                    <td>:</td>                            
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">W.D.T</td>
                                    <td>:</td>
                                </tr>
 --}}{{-- 
                                <tr>
                                    <td class="control-label">Fax No.</td>
                                    <td>:</td>                            
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                 
                                </tr>  --}}
                        </table>
                     {{--    <br> --}}
                         {{-- <div class="form-actions">   
                                <div class="row">
                                    <div class="col-md-12"> --}}
                                        
                                            <!--button type="button" class="btn waves-effect waves-light btn-secondary">Back</button-->
                                            
                                         
                                         {{--   @if (!empty ($confirmation) 
                                           && $confirmation->preferredbranch !=''
                                           && $confirmation->jrecvdate != ''
                                           && $confirmation->stampdate != '')
                                        
                                           <!--button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary">@lang('confirmation.preview')</button-->
                                            
                                            <button type="submit" name="action" value="Submit" class=" btn waves-effect waves-light btn btn-primary" alt="alert" id="submit" onclick="return confirm('Are you sure want to submit?');">@lang('confirmation.submit')</button>
                                        
                                            @else
                                        
                                            <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn btn-primary" id="submit" disabled>@lang('confirmation.submit')</button>
                                            
                                            @endif --}}
                                           {{--  <div class="col-md-1">        
                                            <button type="submit" name="action" class="btn btn-success">@lang('confirmation.attr.back')</button>
                                        </div> --}}
                                        <div class="form-actions">
                                      {{--   <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>@lang('registrationRTW.attr.submit')</button></a> --}}
                                      {{-- <a class="btn waves-effect waves-light btn-success text-white"  onclick="buttonAlert();" >SUBMIT</a> --}}
                                      {{--    <a class="btn waves-effect waves-light btn-success text-white" href="{{ route('preview') }}">PREVIEW</a> --}}
                                            <button type="submit" name="action" class="btn waves-effect waves-light btn btn-success"><a href=/PK.index>Back</a></button>

                                               <a href=/homertw><button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>@lang('registrationRTW.attr.submit')</button></a>
                                        </div>
                                 {{--    </div>
                                </div>
                            </div>   --}} 
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection  



