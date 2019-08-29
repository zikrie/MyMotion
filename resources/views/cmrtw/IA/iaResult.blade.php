
<div class="row p-t-20">
    <label for="example-text-input" class="col-form-label">@lang('ia.attr.name') : @if(!empty($casertw)){{ $casertw->name }} @endif</label>
</div>
<div class="row p-t-20">
    <label for="example-text-input" class="col-form-label">@lang('ia.attr.idno') : @if(!empty($casertw)){{ $casertw->idno }} @endif</label>
</div>
<!-- Column -->
<div class="row p-t-20">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #98cb5b;text-align:center;" id="headingIA">
                <h5 class="mb-0">                           
                    Rehabilitation Needs:
                </h5>
            </div>
            <div class="table-responsive m-t-40">
                <table id="example231" class="display nowrap table table-hover table-striped table-bordered " cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align:center">@lang('caseMgmt.attr.strength')</th>
                            <th style="text-align:center">@lang('caseMgmt.attr.weakness')</th>
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
                            {{-- <td>{{ $datediff }}</td> --}}
                        </tr>
                        
                    </tbody>
                </table>
            </div>    
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #98cb5b;text-align:center;" id="headingcomment">
                <h5 class="mb-0">                           
                    Comments
                </h5>
            </div>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-12">
        <textarea class="form-control" rows="5" type="textarea"  id="comments"></textarea>
    </div>
</div>