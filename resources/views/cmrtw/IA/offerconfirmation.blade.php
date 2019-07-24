<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@lang('offerconfirmation.title1')</h4>
                <form class="form">
                    <div class="form-group mt-5 row">
                        <div class="col-2">
                            <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.name')</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="text"  id="name" value="@if(!empty($casertw)){{ $casertw->name }} @endif" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.ictype')</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" value="@if(!empty($casertw)){{ $casertw->idtype }} @endif" readonly>
                                        <option>Please Select</option>
                                         @foreach($idtype as $id)
                                            @if (!empty($casertw) && $id->refcode == $casertw->idtype)
                                                <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                            @else
                                                <option value="{{$id->refcode}}">{{$id->descen}}</option>

                                            @endif
                                        @endforeach
                                    </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.idno')</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="text"  id="idno" value="@if(!empty($casertw)){{ $casertw->idno }} @endif" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2">
                            <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.dob')</label>
                        </div>
                        <div class="col-8">
                          @if(!empty($casertw) && $casertw->dob !='')
                          <input type="date" id="dob" name="dob" value="{{substr($casertw->dob,0,4)}}-{{substr($casertw->dob,4,2)}}-{{substr($casertw->dob,6,2)}}" class="form-control" readonly>
                          @else
                          <input type="date" id="dob" name="dob" value="" class="form-control" readonly>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.race')</label>
                    </div>
                    <div class="col-8">
                        <select class="form-control" name="race" readonly> 
                            {{-- <option>@lang('insuredPerson.attr.choose_race')</option> --}}
                            <option>Please Select</option>
                            @foreach($race as $id)
                            @if (!empty($casertw) && $casertw->race == $id->refcode)
                            <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                            @else
                            <option value="{{$id->refcode}}">{{$id->descen}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.gender')</label>
                    </div>
                    <div class="col-8">
                        <select class="form-control" name="gender" readonly>
                            <!--option value="">@if(!empty($obprofile)){{ $obprofile->gender }} @endif</option-->
                            <option>Please Select</option>
                            @if (!empty($casertw) && $casertw->gender == 'F')
                            <option value="F" selected>Female</option>
                            <option value="M">Male</option>
                            @elseif (!empty($casertw) && $casertw->gender == 'M')
                            <option value="F">Female</option>
                            <option value="M" selected>Male</option>
                            @else
                            <option value="F">Female</option>
                            <option value="M">Male</option>
                            @endif
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <h4 class="card-title">@lang('offerconfirmation.title')</h4>
            <form class="form">
                <div class="form-group mt-5 row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.resource')</label>
                    </div>
                    <div class="col-8">
                        <select class="form-control select" id="bankloc" name='bankloc'
                                        onchange="myFunction()">
                            <option value="">Please Select</option>
                            <option value="Letter">@lang('offerconfirmation.attr.letter')</option>
                            <option value="Email">@lang('offerconfirmation.attr.email')</option>
                            <option value="Telephone">@lang('offerconfirmation.attr.telephone')</option>
                        </select>
                    </div>
                </div>
            <div id="Letter">
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.letterdate')</label>
                    </div>
                    <div class="col-8">
                        <input class="form-control selectLetter" type="date"  id="letterdate">
                    </div>
                </div>
            </div>
            <div id="Email">
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.emaildate')</label>
                    </div>
                    <div class="col-8">
                        <input class="form-control selectEmail" type="date"  id="emaildate">
                    </div>
                </div>
            </div>
            <div id="Call">
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbyob')</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.date')</label>
                            <input type="date" class="form-control selectCall"  >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.time')</label>
                            <input type="time" class="form-control selectCall"  >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label"></label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.personincharged')</label>
                            <input type="text" class="form-control selectCall"  >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.cmname')</label>
                            <input type="text" class="form-control selectCall"  >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbycm')</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.date')</label>
                            <input type="date" class="form-control selectCall"  >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.time')</label>
                            <input type="time" class="form-control selectCall"  >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label"></label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.obname')</label>
                            <input type="text" class="form-control selectCall"  >
                        </div>
                    </div>
                </div>
            </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.detailconfirmation')</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                          <select class="form-control select" id="result" name='result'
                                        onchange="myFunction()">
                            <option value="">@lang('offerconfirmation.attr.result')</option>
                            <option value="Yes">@lang('offerconfirmation.attr.yes')</option>
                            <option value="No">@lang('offerconfirmation.attr.no')</option>
                            
                        </select>
                    </div>
                </div>
            </div>
        <div id="No">
            <div class="form-group row">
                <div class="col-2">
                    <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.reasons')</label>
                </div>
                <div class="col-8">
                    <textarea class="form-control" rows="5" type="textarea"  id="reasons"></textarea>
                </div>
            </div>
        </div>


{{--             <select id="mySelect" onchange="myFunction()">
  <option value="Audi">Audi</option>
  <option value="BMW">BMW</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Volvo">Volvo</option>
</select> --}}
{{-- 
<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p> --}}

{{-- <p id="demo"></p> --}}


    
                             {{--    <div>
                                    <label class="control-label">@lang('confirmation.attr.bank_location')</label>
                                        <select class="form-control select" id="bankloc" name='bankloc'
                                        onchange="myFunction()">
                                          
                                          <option value="Audi" selected>Audi</option>
                                          <option value="Mercedes">Mercedes</option>
 {{--  <option value="Mercedes">Mercedes</option>
  <option value="Volvo">Volvo</option> --}}
                                    {{-- </select>
                                    <div id="Audi">
                                        <div class="form-group">
                                            <label>@lang('offerconfirmation.attr.obname')</label>
                                            <input type="text" class="form-control selectAudi"  >
                                        </div>
                                    </div>
                                    <div id="Mercedes">
                                        <div class="form-group">
                                            <label>This Mercedes</label>
                                            <input type="text" class="form-control Mercedes"  >
                                        </div>
                                    </div>
                                </div>
 --}} 

            <div class="form-actions">
                
               {{--  <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('offerconfirmation.attr.reset')</button> --}}
                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                @lang('offerconfirmation.attr.submit')</button>
            </div>
            
            
        </form>
    </div>
</div>
</div>
</div>


<script>
$('select[name=bankloc]').change(function () {
   
    if(this.value == 'Letter'){
        $('#Letter').show();
        $('#Email').hide();
        $('#Call').hide();

    }
     else if(this.value == 'Email')
     {
         $('#Letter').hide();
        $('#Email').show();
        $('#Call').hide();

    }
    else
    {
        $('#Letter').hide();
        $('#Email').hide();
        $('#Call').show();

    }
});


$('select[name=result]').change(function () {
    if (this.value == 'Yes') {
        $('#Yes').show();
        $('#No').hide();
    }
    else{
        $('#Yes').hide();
        $('#No').show();

    }
});
 


 // function myFunction() {
 //        var objTo = document.getElementById('selectBank')

 //         if (objTo.value == 'Letter') {
 //             $('.selectLetter').prop("disabled", false);
 //             $('.selectEmail').prop("disabled", true);
 //             $('.selectCall').prop("disabled", true);

 //         } else if (objTo.value == 'Email') {
 //             $('.selectLetter').prop("disabled", true);
 //             $('.selectEmail').prop("disabled", false);
 //             $('.selectCall').prop("disabled", true);

 //         }
 //         else if (objTo.value == 'Call') {
 //             $('.selectLetter').prop("disabled", true);
 //             $('.selectEmail').prop("disabled", true);
 //             $('.selectCall').prop("disabled", false);

 //         }

 //     }
</script>