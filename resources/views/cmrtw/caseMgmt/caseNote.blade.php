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
                                                                <th>@lang('caseMgmt.attr.activity_date')</th>
                                                                <th>@lang('caseMgmt.attr.plan_type')</th>
                                                                <th>@lang('caseMgmt.attr.title')</th>
                                                                <th>@lang('caseMgmt.attr.description')</th>
                                                                <th>@lang('caseMgmt.attr.prepared_by')</th>
                                                                <th>@lang('caseMgmt.attr.prepared_for')</th>
                                                                <th>@lang('caseMgmt.attr.action')</th>
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
                                                                <td>1</td>
                                                                <td>19/05/2018</td>
                                                                <td>General</td>
                                                                <td>--</td>
                                                                <td>OB memohon untuk berpuasa dirumah. <br> OB memohon untuk membuat persiapan sebelum kembali bekerja</td>
                                                                <td>Fatimahwati.nazir</td>
                                                                <td></td>
                                                                <td><div class= "btn-group">
                                
                                                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                                    </button>
                                                                                    
                                                                    <button class="delete-modal btn btn-danger"  data-id="2">
                                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                                    </button>
                                                                </div>
                                                                </td>
                                                                {{-- <td>{{ $datediff }}</td> --}}
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>18/05/2018</td>
                                                                <td>General</td>
                                                                <td>--</td>
                                                                <td>Pemantauan terhadap pengurusan kes telah dilakukan.</td>
                                                                <td>emmy.hakke</td>
                                                                <td></td>
                                                                <td><div class= "btn-group">
                                
                                                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                                    </button>
                                                                                    
                                                                    <button class="delete-modal btn btn-danger"  data-id="2">
                                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                                    </button>
                                                                </div>
                                                                </td>
                                                                {{-- <td>{{ $datediff }}</td> --}}
                                                            </tr>
                                                            
                                                            
                                                        </tbody>
                                                    </table>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <button style="margin:5px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Add Case Note</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="exampleModal1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
    
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="modal">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.activity_date')</label>
                                    <input class="form-control" type="date"  id="activity_date">
                                </div>
                            </div>
                        </div>  
                                
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.plan_type')</label> 
                                    <select class="form-control" id="plan_type" name="plan_type" required>
                                        <option value="">Please Select</option>
                                        <option value="general">General</option>
                                        {{-- <option value="Two times a month">Two times a month</option> --}}
                                        {{-- <option value="Once a month">Once a month</option> --}}
                                        {{-- <option value="Once in two months">Once in two months</option> --}}
                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.title')</label>
                                    <input type="text" name="title" id="title" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.description')</label>
                                    <input type="text" name="description" id="description" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.prepared_by')</label>
                                    <input type="text" name="prepared_by" id="prepared_by" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.prepared_for')</label>
                                    <input type="text" name="prepared_for" id="prepared_for" class="form-control" required>
                                </div>
                            </div>

                        </div>
                                
                    </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="addRehab">
                                <span class='glyphicon glyphicon-check'></span> Add
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                </div>    
            </div>
        </div>
    </div>

    
