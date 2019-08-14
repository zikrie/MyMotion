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
                                                    <input type="radio" id="AquesS11" name="quesS1A" class="custom-control-input" value="0" required>
                                                    <label class="custom-control-label" for="AquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="AquesS12" name="quesS1A" class="custom-control-input" value="1" required>
                                                    <label class="custom-control-label" for="AquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="AquesS13" name="quesS1A" class="custom-control-input" value="2" required>
                                                    <label class="custom-control-label" for="AquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="AquesS14" name="quesS1A" class="custom-control-input" value="3" required>
                                                    <label class="custom-control-label" for="AquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                        <input type="radio" id="AquesS15" name="quesS1A" class="custom-control-input" value="3" required>
                                                        <label class="custom-control-label" for="AquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="BquesS11" name="quesS1B" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="BquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="BquesS12" name="quesS1B" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="BquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="BquesS13" name="quesS1B" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="BquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="BquesS14" name="quesS1B" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="BquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="BquesS15" name="quesS1B" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="BquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="DquesS11" name="quesS1D" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="DquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="DquesS12" name="quesS1D" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="DquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="DquesS13" name="quesS1D" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="DquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="DquesS14" name="quesS1D" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="DquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="DBquesS15" name="quesS1D" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="DBquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="EquesS11" name="quesS1E" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="EquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="EquesS12" name="quesS1E" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="EquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="EquesS13" name="quesS1E" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="EquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="EquesS14" name="quesS1E" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="EquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="EquesS15" name="quesS1E" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="EquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="FquesS11" name="quesS1F" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="FquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="FquesS12" name="quesS1F" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="FquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="FquesS13" name="quesS1F" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="FquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="FquesS14" name="quesS1F" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="FquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="FquesS15" name="quesS1F" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="FquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="GquesS11" name="quesS1G" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="GquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="GquesS12" name="quesS1G" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="GquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="GquesS13" name="quesS1G" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="GquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="GquesS14" name="quesS1G" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="GquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="GquesS15" name="quesS1G" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="GquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="HquesS11" name="quesS1H" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="HquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="HquesS12" name="quesS1H" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="HquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="HquesS13" name="quesS1H" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="HquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="HquesS14" name="quesS1H" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="HquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="HquesS15" name="quesS1H" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="HquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="IquesS11" name="quesS1I" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="IquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="IquesS12" name="quesS1I" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="IquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="IquesS13" name="quesS1I" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="IquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="IquesS14" name="quesS1I" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="IquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="IquesS15" name="quesS1" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="IquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="JquesS11" name="quesS1J" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="JquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="JquesS12" name="quesS1J" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="JquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="JquesS13" name="quesS1J" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="JquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="JquesS14" name="quesS1J" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="JquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="JquesS15" name="quesS1J" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="JquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="KquesS11" name="quesS1K" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="KquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="KquesS12" name="quesS1K" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="KquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="KquesS13" name="quesS1K" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="KquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="KquesS14" name="quesS1K" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="KquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="KquesS15" name="quesS1K" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="KquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="KquesS11" name="quesS1K" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="KquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="KquesS12" name="quesS1K" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="KquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="KquesS13" name="quesS1K" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="KquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="KquesS14" name="quesS1K" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="KquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="KquesS15" name="quesS1K" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="KquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="LquesS11" name="quesS1L" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="LquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="LquesS12" name="quesS1L" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="LquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="LquesS13" name="quesS1L" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="LquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="LquesS14" name="quesS1L" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="LquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="LquesS15" name="quesS1L" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="LquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="MquesS11" name="quesS1M" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="MquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="MquesS12" name="quesS1M" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="MquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="MquesS13" name="quesS1M" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="MquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="MquesS14" name="quesS1M" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="MquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="MquesS15" name="quesS1M" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="MquesS15">@lang('caseMgmt.attr.answer5')</label>
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
                                                            <input type="radio" id="NquesS11" name="quesS1N" class="custom-control-input" value="0" required>
                                                            <label class="custom-control-label" for="NquesS11">@lang('caseMgmt.attr.answer1')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="NquesS12" name="quesS1N" class="custom-control-input" value="1" required>
                                                            <label class="custom-control-label" for="NquesS12">@lang('caseMgmt.attr.answer2')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="NquesS13" name="quesS1N" class="custom-control-input" value="2" required>
                                                            <label class="custom-control-label" for="NquesS13">@lang('caseMgmt.attr.answer3')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="NquesS14" name="quesS1N" class="custom-control-input" value="3" required>
                                                            <label class="custom-control-label" for="NquesS14">@lang('caseMgmt.attr.answer4')</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="NquesS15" name="quesS1N" class="custom-control-input" value="3" required>
                                                                <label class="custom-control-label" for="NquesS15">@lang('caseMgmt.attr.answer5')</label>
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

    
    