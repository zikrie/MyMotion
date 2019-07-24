<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">Upload Document</h5>
                        <hr class="m-t-0 m-b-40">       
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
                                                <th style="display:none;">Doctype </th>
                                                <th>@lang('uploaddoc.attr.docdesc')</th>
                                                <th>@lang('uploaddoc.attr.docpath')</th>
                                                <th>@lang('uploaddoc.attr.view')</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $cnt = 0; ?>
                                            @foreach($doclist as $data) 
                                                        <?php $docfound = false; ?>
                                                        @if (!empty($docinfo))
                                                                 @foreach ($docinfo as $d)
                                                                 @if ($d->doctype == $data->doctype)
                                            <tr>
                                                
                                                <td style="display:none;"><input type="hidden" class="number" value="{{$cnt}}"></td>
                                                <td style="display:none;"><input type="hidden"name="doctype[{{$cnt}}]" value="{{ $data -> doctype}}"> </td>
                                                <td><input type ="hidden" name="doccat[{{$cnt}}]" value="{{ $data -> doccat}}" >{{ $data -> docdescen}}</td>
                                                <td><input type="file" name="pdf[{{$cnt++}}]" id="pdf_cancel_{{$cnt-1}}">
                                                     <div class="preview btn_cancel_{{$cnt-1}}"> <i class="icon-close"></i></div>
                                            </td>
                                                <td>
                                                
                                                <a href='/viewdoc?docname={{$d->docname}}' target="_blank">View</a>
                                                <?php $docfound = true; ?>
                                                
                                                @endif
                                                @endforeach
                                                @endif
                                            </td>
                                                @if ($docfound ==  false)
                                                
                                                <td></td>
                                                @endif 
                                             
                                            </tr>

                                            @endforeach
                                            
                                            
                                        </tbody>
                                      
                                        
                                    </table>
                                    <table>
                                         <tr>
                                                <td id="select_database" style="display:none;" >
                                                    <select id="idtype_doc" class="form-control" name="idtype">
                                                        <option value="" selected disable hidden></option>
                                                            @foreach($doclist as $data)
                                                            <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}
                                                            </option>
                                                            @endforeach 
                                                    </select>
                                                </td> 

                                        </tr> 
                                      

                                    </table>
                                </div>
                            
                                

                                <div class="form-action">
                                    <button type="button" id="add_doc"
                                        class="btn btn waves-effect waves-light btn-secondary">@lang('uploaddoc.attr.adddoc')</button>
                                    <!--button type="submit"
                                        class="btn btn-rounded btn-block btn-outline-success ">Upload All</button-->
                                    <button type="submit" name="action" alt="alert" value="Submit" onclick="return confirm('Are you sure want to submit?');" class="btn btn waves-effect waves-light btn-success">@lang('uploaddoc.attr.save')</button>
                                </div>
                                
                                

                            
                        </div>
                    </div>
                            <br/>
                          
                            
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
<!-- Row -->
</div>