<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form">
                        <div class="form-body">
    
                           <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                        <form id="calculateForm">
                           <div class="row p-t-20">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">1. Saya rasa mungkin saya sudah bersedia untuk mencari beberapa jenis pekerjaan <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                    <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                    <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                    <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                    <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                        <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                        <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">2. Saya melakukan sesuatu untuk mendapatkan pekerjaan <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">3. Ia mungkin agak berbaloi untuk mencari pekerjaan<span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD11" name="quesD1" class="custom-control-input" value="0" required>
                                                    <label class="custom-control-label" for="quesD11">0</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD12" name="quesD1" class="custom-control-input" value="1" required>
                                                    <label class="custom-control-label" for="quesD12">1</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD13" name="quesD1" class="custom-control-input" value="2" required>
                                                    <label class="custom-control-label" for="quesD13">2</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="quesD14" name="quesD1" class="custom-control-input" value="3" required>
                                                    <label class="custom-control-label" for="quesD14">3</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">4. Saya tidak mampu bekerja. Saya tidak nampak mengapa saya perlu mencari pekerjaan <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">5.Saya akhirnya melakukan sesuatu untuk mendapatkan pekerjaan <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">6. Saya telah berfikir bahawa ia mungkin adalah masa yang sesuai bagi saya untuk mencari pekerjaan <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">7. Mempersiapkan diri saya untuk mencari pekerjaan adalah sangat membuang masa kerana saya sudah tidak boleh bekerja <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">8. Saya rasa tidak mempunyai pekerjaan dalam tempoh yang agak lama adalah tidak bagus, tetapi tiada apa yang boleh saya lakukan sekarang <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">9. Saya tahu saya perlu untuk mendapatkan pekerjaan dan saya fikir patut untuk mencari satu pekerjaan <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label class="control-label">10. Orang memberitahu saya bahawa saya perlu mendapatkan pekerjaan, tetapi saya tidak fikir begitu <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">11. Sesiapa sahaja boleh bercakap tentang mahu untuk mencari pekerjaan, tetapi saya benar-benar melakukan sesuatu mengenainya <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">12. Semua perbincangan ini adalah membosankan. Mengapa orang lain tidak meninggalkan saya sendirian sahaja? <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">13. Saya secara aktif melakukan sesuatu untuk mencari pekerjaan <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">14. Ia adalah sesuatu yang membuang masa bersedia untuk mencari pekerjaan kerana saya  benar-benar tidak mahu bekerja lagi <span class="text-danger">*</span></label>
                                        <div class="row p-t-20">
                                                <div class="col-md-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS11" name="quesS1" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="quesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS12" name="quesS1" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="quesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS13" name="quesS1" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="quesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="quesS14" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="quesS14">@lang('caseMgmt.attr.answer5')</label>
                                                            </div>
                                                    </div>
                                        </div> 
                                    </div>
                                </div>
                                  
                                
                            </div>
                            
                        </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    