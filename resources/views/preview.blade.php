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
                    <form action="/registrationrtw">
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
                                        <td></td>
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
                                    </tr>
    
    
                                    <tr>
                                        <td class="control-label">Race</td>
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
                                        <td class="control-label">Gender</td>
                                        <td>:</td>
                                    </tr>
    
                                    <tr>
                                        <td class="control-label">Occupation</td>
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
                                        <td class="control-label">Address</td>
                                        <td>:</td>
                                    </tr>
    
                                    <tr>
                                        <td class="control-label">City</td>
                                        <td>:</td>                            
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
                                        <td class="control-label">P.O Box</td>
                                        <td>:</td>
                                    </tr>
    
                                    <tr>
                                        <td class="control-label">Locked Bag</td>
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
    
                                    <tr>
                                        <td class="control-label">Mobile No.</td>
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
                                        <td class="control-label">Telephone No. </td>
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
                                        <td>:</td>
                                    </tr>
                            </table>  
                    </div>
                    <br/>
                    <br/>
    
    
    
    
    
                    <div class="form-body">
                            <h5 class="card-title">Wages Information</h5>
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <hr>
    
                            <hr class="m-t-0 m-b-40">
                            <table id="div_preview" border="0" cellpadding="10px">
                                    <tr>
                                        <td class="control-label">Employer Code</td>
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
                                        <td class="control-label">Employer Type</td>
                                        <td>:</td>
                                    </tr>
    
                                    <tr>
                                        <td class="control-label">Employer Name</td>
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
                                        <td class="control-label">Address</td>
                                        <td>:</td>
                                    </tr>
    
    
                                    <tr>
                                        <td class="control-label">Postcode</td>
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
                                    </tr>
    
                                    <tr>
                                        <td class="control-label">State</td>
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
                                    
                                    </tr>
    
                                    <tr>
                                        <td class="control-label">City</td>
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
                                        <td class="control-label">P.O Box</td>
                                        <td>:</td>        
                                    </tr>
    
                                    <tr>
                                        <td class="control-label">Telephone No</td>
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
                                        <td class="control-label">Locked Bag</td>
                                        <td>:</td>
                                    </tr>
    
                                    <tr>
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
                                    </tr> 
    
                                   
                            </table>   
                            <a class="btn waves-effect waves-light btn-success text-white"  onclick="buttonAlert();" >SUBMIT</a>
                
                           
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection     
   

