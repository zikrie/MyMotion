<!--Row-->
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form action="#">
					<div class="form-body">
						<h3 class="card-title">@lang('odDetails.title')</h3>
						<hr>
						<div class="row p-t-20">
							<div class="col-12">
								<div class="card">
									<label>@lang('odDetails.attr.nameAddress')</label>
									<div class="table-responsive">
										<table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
											<thead>
												<tr>
													<th data-breakpoints="xs">@lang('odDetails.attr.num')</th>
													<th>@lang('odDetails.attr.nameAddress_employer')</th>
													<th>@lang('odDetails.attr.period')</th>
													<th data-breakpoints="xs sm">@lang('odDetails.attr.designation')</th>
												</tr>
											</thead>
											<tbody>
												<tr data-expanded="true">
													<td>1</td>
													<td><textarea type="text" id="nameAddressEmployer" class="form-control"></textarea></td>
													<td><textarea type="text" id="period" class="form-control"></textarea></td>
													<td><textarea type="text" class="form-control"></textarea></td>
												</tr>
												<tr data-expanded="true">
													<td>2</td>
													<td><textarea type="text" id="nameAddressEmployer" class="form-control"></textarea></td>
													<td><textarea type="text" id="period" class="form-control"></textarea></td>
													<td><textarea type="text" class="form-control"></textarea></td>
												</tr>
												<tr data-expanded="true">
													<td>3</td>
													<td><textarea type="text" id="nameAddressEmployer" class="form-control"></textarea></td>
													<td><textarea type="text" id="period" class="form-control"></textarea></td>
													<td><textarea type="text" class="form-control"></textarea></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label">@lang('odDetails.attr.desc')</label>
									<textarea type="text" id="description" class="form-control form-control"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('odDetails.attr.disease_related')</label>
									<select class="form-control">
										{{-- <option>@lang('odDetails.attr.select_disease_related')</option> --}}
										<option>@lang('odDetails.attr.yes')</option>
										<option>@lang('odDetails.attr.no')</option>
									</select>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">@lang('odDetails.attr.date_death')</label>
									<input type="date" class="form-control" placeholder="Date of Death">
								</div>
							</div>
							<!--/span-->
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label">@lang('odDetails.attr.duties')</label>
									<textarea type="text" class="form-control"></textarea>
								</div>
							</div>
							<!--/span-->
							<!--/span-->
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label">@lang('odDetails.attr.symptoms')</label>
									<textarea type="text" class="form-control"></textarea>
								</div>
							</div>
							<!--/span-->
							<!--/row-->
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">@lang('odDetails.attr.mc_period')</label>
									<input type="date" class="form-control">
								</div>
							</div>
							<!--/span-->
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">@lang('odDetails.attr.until')</label>
									<input type="date" class="form-control" placeholder="Until">
								</div>
							</div>
							<!--/span-->
							<!--/row-->
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">@lang('odDetails.attr.total_days')</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>@lang('odDetails.attr.mc_status')</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>@lang('odDetails.attr.nameAddress_clinic')</label>
									<textarea type="text" class="form-control"></textarea>
								</div>
							</div>
							<!--/span-->
						</div>
					</div>
					<div class="form-actions">
						<button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.cancel')</button>
						<button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.clear')</button>
						<button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
						@lang('odDetails.save')</button>
					</div>
				</div>
			</form>
		</div>
		
	</div>
</div>
<!-- Row-->