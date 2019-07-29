<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('rtwupload.title')</h5>
                        {{--<hr class="m-t-0 m-b-40">--}}
                        @if(Session::get('messagedoc'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagedoc')}}
                            </div>

                        </div>
                        <br>

                        @elseif (!empty($messagedoc))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messagedoc}}
                            </div>

                        </div>
                        <br>
                        <br>
                        @endif

                        <div class="form-actions">

                            <div class="row">
                                <div class="col-12">

                                    <div class="table-responsive">
                                        @if(count($errors)>0)
                                        <ul>
                                            @foreach($errors->all() as $error)

                                            <li class="alert alert danger">{{$error}}</li>

                                            @endforeach

                                        </ul>

                                        @endif
                                        <table class="table" id="table_upload_doc">
                                            <col width="50%">
                                            <col width="30%">
                                            <col width="20%">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>@lang('rtwupload.attr.docdesc')</th>
                                                    <th>@lang('rtwupload.attr.docpath')</th>
                                                    <th>@lang('rtwupload.attr.view')</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                             
                                                
                                            

                                              
                                                <tr>
                                                   
                                             
                                                <td> Supporting Document</td>
                                                        
                                                <td><span class="choosefile"><input type="file" name="pdf[1]"
                                                        id="pdf_cancel_">
                                                    {{--<div class="preview btn_cancel_{{$cnt}}"> --}}
                                                        <i class=" preview btn_cancel_ icon-close"></i>
                                                    {{--</div>--}}
                                                    </span>
                                                </td>
                                               
                                                    <td>
                                                         @if (!empty($docinfo))
                                                          @foreach ($docinfo as $d)
                                                         
                                                        <a href='/viewdoc?docname={{$d->docname}}' target="_blank">
                                                       </a>
                                                     
                                                @endforeach
                                                @endif


                                                   </td>
                                            </tbody>


                                        </table>
                                   {{--      <table>
                                            <tr>
                                                <td id="select_database" style="display:none;">
                                                    <select id="idtype_doc" class="form-control" name="idtype">
                                                        <option value="" selected disable hidden></option>
                                                        @foreach($doclist_select as $data)
                                                        <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">
                                                            {{ $data -> docdescen}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                            </tr>


                                        </table>  --}}
                                    </div>



                                    <div class="form-action">
                                        <button type="submit"
                                            class="btn btn waves-effect waves-light btn-success">UPLOAD DOCUMENT</button>
                                  {{--       <button type="button" id="add_doc"
                                            class="btn btn-secondary">@lang('uploaddoc.adddoc')</button> --}}
                                             <a class="btn waves-effect waves-light btn-success text-white" href="{{ route('preview') }}">PREVIEW</a>
                                             <a href=/homertw><button type="submit" class="btn btn waves-effect waves-light btn-success"> </i>SUBMIT</button></a>
                                        </div>
                                        <!--button type="submit"
                                            class="btn btn-rounded btn-block btn-outline-success ">Upload All</button-->
                                        
                                    </div>




                                </div>
                            </div>
                            <br />


                        </div>
                          </form>
                    </div>
              
            </div>
        </div>
    </div>
