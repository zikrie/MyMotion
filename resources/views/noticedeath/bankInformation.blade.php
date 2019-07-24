<div class="tab-pane  p-20" id="bankInformation" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">@lang('confirmation.bank_info')</h3>
                            <hr> 
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.recipient_bank')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.select_reason')
                                            </option> --}}
                                            <option value="No IC">@lang('confirmation.attr.yes')</option>
                                            <option value="Permanent Representative Overseas">@lang('confirmation.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bank_location')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.select_reason')
                                            </option> --}}
                                            <option value="No IC">@lang('confirmation.local_bank')</option>
                                            <option value="Permanent Representative Overseas">@lang('confirmation.overseas_bank')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.reason')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.select_reason')
                                            </option> --}}
                                            <option value="No IC">@lang('confirmation.attr.no_ic')</option>
                                            <option value="Permanent Representative Overseas">@lang('confirmation.attr.permanent_representative')</option>
                                            <option value="Bankrupt">@lang('confirmation.attr.bankrupt')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bai_status')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.choose_bai')
                                            </option> --}}
                                            <option value="Active">@lang('confirmation.attr.active')</option>
                                            <option value="Inactive">@lang('confirmation.attr.inactive')</option>
                                            <option value="Suspense">@lang('confirmation.attr.suspense')</option>
                                            <option value="Closed">@lang('confirmation.attr.closed')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.substatus_desc')
                                        </label>
                                        <input type="text" name="sub_status_description" id="sub_status_description" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.payment')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.choose_payment')
                                            </option> --}}
                                            <option value="Cheque">@lang('confirmation.attr.cheque')</option>
                                            <option value="EFT">@lang('confirmation.attr.eft')</option>
                                            <option value="No Payment">@lang('confirmation.attr.no_payment')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="box-title m-t-40">@lang('confirmation.local_bank')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bank_name')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.choose_bank')
                                            </option> --}}
                                            <option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
                                            <option value="Maybank (MBB)">Maybank (MBB)</option>
                                            <option value="Bank Simpanan Nasional (BSN)">Bank Simpanan
                                            Nasional (BSN)</option>
                                            <option value="Bank Muamalat (BMMB)">Bank Muamalat (BMMB)
                                            </option>
                                            <option value="RHB Bank Berhad (RHB)">RHB Bank Berhad (RHB)
                                            </option>
                                            <option value="Public Bank Berhad (PBB)">Public Bank Berhad
                                            (PBB)</option>
                                            <option value="Bank Islam Malaysia Berhad (BIMB)">Bank Islam
                                            Malaysia Berhad (BIMB)</option>
                                            <option value="Hong Leong Bank Berhad (HLBB)">Hong Leong
                                            Bank Berhad (HLBB)</option>
                                            <option value="Ambank Berhad (AMBank)">Ambank Berhad
                                            (AMBank)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bank_branch')</label>
                                        <input type="text" name="bank_branch" id="bank_branch" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bank_accNo')</label>
                                        <input type="text" name="bank_account_no" id="bank_account_no" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bank_address')</label>
                                        <input type="text" name="bank_address" id="bank_address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.type_acc')</label>
                                         <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.choose_type_acc')
                                            </option> --}}
                                            <option value="Savings">@lang('confirmation.attr.savings')</option>
                                            <option value="Current">@lang('confirmation.attr.current')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="box-title m-t-40">@lang('confirmation.overseas_bank')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bank_name')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.choose_bank')
                                            </option> --}}
                                            <option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
                                            <option value="Maybank (MBB)">Maybank (MBB)</option>
                                            <option value="Bank Simpanan Nasional (BSN)">Bank Simpanan
                                            Nasional (BSN)</option>
                                            <option value="Bank Muamalat (BMMB)">Bank Muamalat (BMMB)
                                            </option>
                                            <option value="RHB Bank Berhad (RHB)">RHB Bank Berhad (RHB)
                                            </option>
                                            <option value="Public Bank Berhad (PBB)">Public Bank Berhad
                                            (PBB)</option>
                                            <option value="Bank Islam Malaysia Berhad (BIMB)">Bank Islam
                                            Malaysia Berhad (BIMB)</option>
                                            <option value="Hong Leong Bank Berhad (HLBB)">Hong Leong
                                            Bank Berhad (HLBB)</option>
                                            <option value="Ambank Berhad (AMBank)">Ambank Berhad
                                            (AMBank)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bank_accNo')</label>
                                        <input type="text" name="bank_account_no" id="bank_account_no" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.swift_code')</label>
                                        <input type="text" name="swift_code" id="swift_code" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bsb_code')</label>
                                        <input type="text" name="bsb_code" id="bsb_code" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.bank_address')</label>
                                        <input type="text" name="bank_address" id="bank_address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.type_acc')</label>
                                         <select class="form-control">
                                            {{-- <option>@lang('confirmation.attr.choose_type_acc')
                                            </option> --}}
                                            <option value="Savings">@lang('confirmation.attr.savings')</option>
                                            <option value="Current">@lang('confirmation.attr.current')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="box-title m-t-40">@lang('confirmation.bankrupt')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.date_letter')</label>
                                        <input type="date" name="data_generated_carian_insolvensi" id="data_generated_carian_insolvensi" placeholder="dd/mm/yyyy"
                                        class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.insolvensy_add')</label>
                                        <input type="text" name="insolvensi" id="insolvensi" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.branch_insolvency')</label>
                                        <input type="text" name="branch" id="branch" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.cheque_no')</label>
                                        <input type="text" name="cheque_no" id="cheque_no" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.cheque_date')</label>
                                        <input type="date" name="cheque_date" id="cheque_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.nett_amount')</label>
                                        <input type="text" name="net_amount" id="net_amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.reason_no_ic')</label>
                                        <select class="form-control">
                                            {{-- <option selected disabled hidden>@lang('confirmation.choose1')</option> --}}
                                            <option value="yes">IMM13</option>
                                            <option value="no">Indigenous People</option>
                                            <option value="no">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <label class="control-label">Add New Another Bank Account</label>
                                    <br>
                                    <button type="button" class="btn btn-info btn-rounded m-t-10 float-center" data-toggle="modal"
                                    data-target="#add-contact">Add </button>
                                </div>
                            </div>
                            <!-- model -->
                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Add New Account Bank Number</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
    
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Account Bank Number"> </div>
    
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Comment">
                                                    </div>
    
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">@lang('confirmation.save')</button>
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">@lang('confirmation.cancel')</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- end model -->
    
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped table-bordered" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th>Account Bank Number</th>
                                                <th>@lang('confirmation.attr.comments')</th>
                                                <th>Action</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.0</td>
                                                <td> <button type="button"
                                                    class="btn waves-effect waves-light btn-rounded btn-info">@lang('confirmation.attr.view')</button>
                                                    <button type="button"
                                                    class="btn waves-effect waves-light btn-rounded btn-secondary">@lang('confirmation.attr.print')</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('confirmation.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('confirmation.clear')</button>
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                @lang('confirmation.save')</button>
                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>