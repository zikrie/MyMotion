                <form action="#">
                        <h3 class="card-title">@lang('wages.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('wages.attr.commencement_date')</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('wages.attr.end_date')</label>
                                    <input type="date" class="form-control" >
                                </div>
                            </div>
                             <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('wages.attr.wages_paid_accident')</label>
                                        <select class= "form-control">
                                        {{-- <option>@lang('wages.attr.select_wages_paid_accident')</option> --}}
                                        <option value="yes">@lang('wages.attr.yes')</option>
                                        <option value="no">@lang('wages.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <!-- Column -->
                        <div class="row p-t-20">
                                <div class="col-md-12">
                                    <label>@lang('wages.attr.details_wages')</label>
                                    <div class="table-responsive">
                                        <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th data-breakpoints="xs">@lang('wages.attr.num')</th>
                                                    <th>@lang('wages.attr.month')</th>
                                                    <th>@lang('wages.attr.year')</th>
                                                    <th data-breakpoints="xs sm">@lang('wages.attr.wages')</th>
                                                    <th data-breakpoints="xs">@lang('wages.attr.contribution')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-expanded="true">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('wages.attr.january')</option>
                                                                <option value="February">@lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')</option>
                                                                <option value="April">@lang('wages.attr.april')</option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')</option>
                                                                <option value="July">@lang('wages.attr.july')</option>
                                                                <option value="August">@lang('wages.attr.august')</option>
                                                                <option value="September">@lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')</option>
                                                                <option value="November">@lang('wages.attr.november')</option>
                                                                <option value="December">@lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('wages.attr.january')</option>
                                                                <option value="February">@lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')</option>
                                                                <option value="April">@lang('wages.attr.april')</option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')</option>
                                                                <option value="July">@lang('wages.attr.july')</option>
                                                                <option value="August">@lang('wages.attr.august')</option>
                                                                <option value="September">@lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')</option>
                                                                <option value="November">@lang('wages.attr.november')</option>
                                                                <option value="December">@lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('wages.attr.january')</option>
                                                                <option value="February">@lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')</option>
                                                                <option value="April">@lang('wages.attr.april')</option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')</option>
                                                                <option value="July">@lang('wages.attr.july')</option>
                                                                <option value="August">@lang('wages.attr.august')</option>
                                                                <option value="September">@lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')</option>
                                                                <option value="November">@lang('wages.attr.november')</option>
                                                                <option value="December">@lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('wages.attr.january')</option>
                                                                <option value="February">@lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')</option>
                                                                <option value="April">@lang('wages.attr.april')</option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')</option>
                                                                <option value="July">@lang('wages.attr.july')</option>
                                                                <option value="August">@lang('wages.attr.august')</option>
                                                                <option value="September">@lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')</option>
                                                                <option value="November">@lang('wages.attr.november')</option>
                                                                <option value="December">@lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-10">
                                                           <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option>
 --}}                                                           <option value="January">@lang('wages.attr.january')</option>
                                                                <option value="February">@lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')</option>
                                                                <option value="April">@lang('wages.attr.april')</option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')</option>
                                                                <option value="July">@lang('wages.attr.july')</option>
                                                                <option value="August">@lang('wages.attr.august')</option>
                                                                <option value="September">@lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')</option>
                                                                <option value="November">@lang('wages.attr.november')</option>
                                                                <option value="December">@lang('wages.attr.december')</option>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('wages.attr.january')</option>
                                                                <option value="February">@lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')</option>
                                                                <option value="April">@lang('wages.attr.april')</option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')</option>
                                                                <option value="July">@lang('wages.attr.july')</option>
                                                                <option value="August">@lang('wages.attr.august')</option>
                                                                <option value="September">@lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')</option>
                                                                <option value="November">@lang('wages.attr.november')</option>
                                                                <option value="December">@lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-actions">
                                        <button type="button" class="btn btn-danger">@lang('wages.cancel')</button>
                                        <button type="button" class="btn btn-warning">@lang('wages.clear')</button>
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('wages.save')</button>
                                </div>
                            </div>  
                            </div>   
                                       
                </form>