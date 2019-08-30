<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    {{-- <h5 class=card-title>Case Note</h5> --}}
                <form action="#">
                    <div class="form-body">

                       
                        <!-- Column -->
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                        <div class="form-group row">
                                                <div class="col-12">
                                                    <button class="btn btn-info btn-lg" type="button"  data-toggle="modal" data-target="#exampleModal12"><i class="fa fa-plus"></i> </button>
                                                </div>
                                            </div>
                                    <div class="table-responsive m-t-40">
                                        <table id="example231" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>@lang('caseMgmt.attr.no')</th>
                                                            <th>@lang('caseMgmt.attr.activity_date')</th>
                                                            <th>@lang('caseMgmt.attr.plan_type')</th>
                                                            <th>@lang('caseMgmt.attr.title')</th>
                                                            <th>@lang('caseMgmt.attr.case_note')</th>
                                                            <th>@lang('caseMgmt.attr.prepared_by')</th>
                                                            <th>@lang('caseMgmt.attr.prepared_for')</th>
                                                            <th>@lang('caseMgmt.attr.action')</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        
                                                       

                                                        <tr>
                                                            <td>1</td>
                                                            <td>19/05/2018</td>
                                                            <td>General</td>
                                                            <td>--</td>
                                                            <td>OB memohon untuk berpuasa dirumah. <br> OB memohon untuk membuat persiapan sebelum kembali bekerja</td>
                                                            <td>Fatimahwati.nazir</td>
                                                            <td></td>
                                                            <td><div class= "btn-group">
                            
                                                                    <div class= "btn-group">
                                     
                                                                            <button type="button" class="btn btn-primary edit">
                                                                                    <span class='glyphicon glyphicon-check'></span> View
                                                                                </button>
                                                                    </div>
                                                            </div>
                                                            </td>
                                                          
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>18/05/2018</td>
                                                            <td>PRM</td>
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
                                                          
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                        </table>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-12">
                                <button style="margin:5px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal12">Add Case Note</button>
                            </div>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="exampleModal12" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
    
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="rehabForm">
                        <div class="row p-t-20">
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.activity_date')</label> 
                                            <input type="date" id="date" class="form-control">
                                        </div>
                                    </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.rehab_type')</label> 
                                    <select class="form-control select" id="bankloc" name="bankloc" required>
                                        <option value="">Please Select</option>
                                        <option value="FCE">FCE</option>
                                        <option value="WSA">WSA</option>
                                        <option value="PRM">PRM</option>
                                        <option value="MM">MM</option>
                                        <option value="VA">VA</option>
                                        <option value="VTM">VTM</option>
                                        <option value="JP">JP</option>
                                        <option value="Financial Support">Financial Support</option>
                                        <option value="Business Support">Business Support</option>
                                        <option value="Rehab Allowance">Rehab Allowance</option>
                                        <option value="Mobility Support">Mobility Support</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.title')</label> 
                                        <input type="text" id="date" class="form-control">
                                    </div>
                            </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">@lang('caseMgmt.attr.case_note')</label> 
                                        <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="90"></textarea>
                                    </div>
                            </div>
                        </div>
                            {{-- <div class="col-md-6">
                                        
                                    <div class="form-group" id="abujahal" style="display:none;">
                                        <label class="control-label">@lang('caseMgmt.attr.specify_no')</label>
                                        <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="car">@lang('caseMgmt.attr.option_ip')</option>
                                        <option value="car">@lang('caseMgmt.attr.option_geo')</option>
                                        <option value="motorcycle">@lang('caseMgmt.attr.option_quit')</option>
                                        <option value="van">@lang('caseMgmt.attr.option_unreachable')</option>
                                    </select>
                                        
                                    </div>
                                </div> --}}
                           
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


