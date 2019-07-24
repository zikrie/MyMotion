@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <h4 class="card-title">@lang('index.attr.accident_notice')</h4>
		
		<!-- Nav tabs -->
            <ul class="nav customtab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#form1" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.employer_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form3" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">@lang('index.attr.wages_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form4" role="tab"><span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span> <span class="hidden-xs-down">@lang('index.attr.accident_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form5" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">@lang('index.attr.medical_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form6" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">@lang('index.attr.upload_documents')</span></a> </li>

                

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form8" role="tab"><span class="hidden-sm-up"><i class=" ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.certificate') </span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form9" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.bank_information') </span></a> </li>

                <!--li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form10" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.permanent_representative')  </span></a> </li-->

                <!--li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form11" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.remarks')</span></a> </li-->

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form12" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.confirmation') </span></a> </li>
            </ul>
				<!-- Tab panes -->
            <div class="tab-content tabcontent-border">

                <div class="tab-pane p-20 active" id="form1" role="tabpanel">
                        @include('noticeAccident.obForm')
                </div>

                <div class="tab-pane p-20" id="form2" role="tabpanel">
                        @include('noticeAccident.employerDetails')
                </div>
                <div class="tab-pane p-20" id="form3" role="tabpanel">
                        @include('noticeAccident.wagesDetails')
                </div>
                <div class="tab-pane p-20" id="form4" role="tabpanel">
                        @include('noticeAccident.accidentDetails')
                </div> 
                <div class="tab-pane p-20" id="form5" role="tabpanel">
                        @include('noticeAccident.medicalCertificate')
                </div>
                <div class="tab-pane p-20" id="form6" role="tabpanel">
                        @include('noticeAccident.uploadDocument')
                </div>
                
                <div class="tab-pane  p-20" id="form8" role="tabpanel">
                        @include('noticeAccident.certificateEmployee')
                </div>

                <div class="tab-pane p-20" id="form9" role="tabpanel">
                        @include('noticeAccident.bankInformation')
                </div>
                <!--div class="tab-pane p-20" id="form10" role="tabpanel">
                        @include('noticeAccident.permanentPresentative')
                </div-->
                <!--div class="tab-pane p-20" id="form11" role="tabpanel">
                        @include('noticeAccident.remarks')
                </div-->

                <div class="tab-pane p-20" id="form12" role="tabpanel">
                        @include('noticeAccident.confirmation')
                </div>	
            </div>
        </div>
    </div>
</div>

<!-- row -->
<script>
	function statechange(){
		
		 var statecode = $("#state1").val();
		 // alert(statecode);
		 $('#brname').find('option').not(':first').remove();
         if (statecode){  

           $.ajax({ 
             url: '/branch/'+statecode,
             type: 'GET',
             dataType: 'json',
            success: function(data){
  //            console.log(data);

             var len = 0;
             if(data != null){
                len = data.length;
            }   

            if(len > 0){
                for(var i=0; i<len; i++){

                    var id = data[i].brcode;
                    var name = data[i].brname; 
                    
                    var option ="<option value='"+id+"'>"+name+"</option>";

                    $("#brname").append(option);
                }
            }   
            	
			}

		   }); 
		}
	}
</script>

@endsection

