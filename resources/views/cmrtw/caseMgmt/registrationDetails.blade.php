<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<form action="/registrationrtw">
					<div class="form-body">
						{{-- <h3 class="card-title">@lang('benefitDetails.insured_details')</h3> --}}
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
							<div class="card m-b-0">
								<div class="card-header" style="background-color: #FFFFFF;"  role="tab" id="headingOne11">
									<h5 class="mb-0">
										<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11"><h4 class="card-title"><i class="fa fa-plus"></i>
											 @lang('index.attr.registerRtw')</h4>
											{{-- @lang('index.attr.registerRtw') --}}
											{{-- <h4 class="card-title"> --}}


										</a>
									</h5>
								</div>
								<div id="collapseOne11" class="collapse" role="tabpanel" aria-labelledby="headingOne11">
									<div class="card-body">
										@include('cmrtw.caseMgmt.registerDetails')
										{{-- first div --}}
										<div class="card m-b-0">
											<div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingThree33">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33"><i class="fa fa-plus"></i>
														@lang('index.attr.mo_details')
													</a>
												</h6>
											</div>
											<div id="collapseThree33" class="collapse" role="tabpanel" aria-labelledby="headingThree33">
												<div class="card-body">
													@include('cmrtw.caseMgmt.medicalOfficerDetails')
												</div>
											</div>
										</div>

										<br>
										{{-- second div --}}
										<div class="card m-b-0">
											<div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingFour44">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour44" aria-expanded="false" aria-controls="collapseFour44"><i class="fa fa-plus"></i>
														@lang('index.attr.sp_details')
													</a>
												</h6>
											</div>
											<div id="collapseFour44" class="collapse" role="tabpanel" aria-labelledby="headingFour44">
												<div class="card-body">
													@include('cmrtw.caseMgmt.serviceProDetails')
												</div>
											</div>
										</div>

										<br>
										{{-- third div --}}
										<div class="card m-b-0">
											<div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingFive55">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive55" aria-expanded="false" aria-controls="collapseFive55"><i class="fa fa-plus"></i>
														@lang('index.attr.ms_referral')
													</a>
												</h6>
											</div>
											<div id="collapseFive55" class="collapse" role="tabpanel" aria-labelledby="headingFive55">
												<div class="card-body">
													@include('cmrtw.caseMgmt.msReferral')
												</div>
											</div>
										</div>

										<br>
										{{-- fourth div --}}
										<div class="card m-b-0">
											<div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingSix66">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix66" aria-expanded="false" aria-controls="collapseSix66"><i class="fa fa-plus"></i>
														@lang('index.attr.accident_details')
													</a>
												</h6>
											</div>
											<div id="collapseSix66" class="collapse" role="tabpanel" aria-labelledby="headingSix66">
												<div class="card-body">
													@include('cmrtw.caseMgmt.accidentDetails')
												</div>
											</div>
										</div>
										
										<br>
										{{-- fifth div --}}
										<div class="card m-b-0">
											<div class="card-header" style="background-color: #98cb5b;"role="tab" id="headingSeven77">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven77" aria-expanded="false" aria-controls="collapseSeven77"><i class="fa fa-plus"></i>
														@lang('index.attr.employer_details')
													</a>
												</h6>
											</div>
											<div id="collapseSeven77" class="collapse" role="tabpanel" aria-labelledby="headingSeven77">
												<div class="card-body">
													@include('cmrtw.caseMgmt.empDetails')
												</div>
											</div>
										</div>



									</div>
								</div>
							</div>



							{{-- second accordion --}}
							<div class="card m-b-0">
								<div class="card-header" style="background-color: #FFFFFF;" role="tab" id="headingEight88">
									<h5 class="mb-0">
										<a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight88" aria-expanded="false" aria-controls="collapseEight88"><h4 class="card-title"><i class="fa fa-plus"></i>
											@lang('index.attr.benefit_details')</h4>
										</a>
									</h5>
								</div>
								<div id="collapseEight88" class="collapse" role="tabpanel" aria-labelledby="headingEight88">
									<div class="card-body">
										{{-- @include('cmrtw.caseMgmt.caseDetails') --}}
										{{-- first div --}}
										<div class="card m-b-0">
											<div class="card-header1" style="background-color: #98cb5b;" role="tab" id="headingNine99">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine99" aria-expanded="false" aria-controls="collapseNine99"><i class="fa fa-plus"></i>
														@lang('index.attr.case_details')
													</a>
												</h6>
											</div>
											<div id="collapseNine99" class="collapse" role="tabpanel" aria-labelledby="headingNine99">
												<div class="card-body">
													@include('cmrtw.caseMgmt.caseDetails')
												</div>
											</div>
										</div>

										<br>
										{{-- second div --}}
										<div class="card m-b-0">
											<div class="card-header" style="background-color: #98cb5b;"role="tab" id="headingTen10">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10"><i class="fa fa-plus"></i>
														@lang('index.attr.accident_details')
													</a>
												</h6>
											</div>
											<div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
												<div class="card-body">
													@include('cmrtw.caseMgmt.accidentDetailsBenefit')
												</div>
											</div>
										</div>
											
											<br>
											{{-- third div --}}
										<div class="card m-b-0">
											<div class="card-header" style="background-color: #98cb5b;"role="tab" id="headingEl11">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEl11" aria-expanded="false" aria-controls="collapseEl11"><i class="fa fa-plus"></i>
														@lang('index.attr.fhus_details')
													</a>
												</h6>
											</div>
											<div id="collapseEl11" class="collapse" role="tabpanel" aria-labelledby="headingEl11">
												<div class="card-body">
													@include('cmrtw.caseMgmt.fhusDetails')
												</div>
											</div>
										</div>
										
										<br>
										{{-- fourth div --}}
										<div class="card m-b-0">
											<div class="card-header" style="background-color: #98cb5b;"role="tab" id="headingTwe12">
												<h6 class="mb-0">
													<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwe12" aria-expanded="false" aria-controls="collapseTwe12"><i class="fa fa-plus"></i>
														@lang('index.attr.fhuk_details')
													</a>
												</h6>
											</div>
											<div id="collapseTwe12" class="collapse" role="tabpanel" aria-labelledby="headingTwe12">
												<div class="card-body">
													@include('cmrtw.caseMgmt.fhukDetails')
												</div>
											</div>
										</div>




									</div>
								</div>
							</div>
						</div>


					</div>


					{{-- <div class="form-actions">
						<button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('registrationRTW.cancel')</button>
						<button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('registrationRTW.clear')</button>
						<button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
						@lang('registrationRTW.save')</button>
					</div> --}}
				</div>
			</form>
		</div>
	</div>
</div>


<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa1").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
