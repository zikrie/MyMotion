@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')



<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            


            <ul class="nav nav-tabs" role="tablist" >
               <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#endorsement" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Endorsement</span></a> </li>
               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#history" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">History</span></a></li>
            </ul>



            <!-- Nav tabs -->
            <div class="tab-content tabcontent-border">
   
                <div class="tab-pane p-20 active"  role="tabpanel">
                            
                        
                        <div class="tab-content tabcontent-border">
                                <!-- RegistrationRTW details tab -->
                            <div class="tab-pane p-20 active" id="endorsement" role="tabpanel">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Insured Person Attendance Detail</h5>
                                        
                                        
                                        <div class="row p-l-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">SP</label> 
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="">Home Nursing Providers Sdn Bhd</option>
                                                        <option value="">ABC Sdn Bhd</option>
                                                        <option value="">DEF Sdn Bhd</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <table id="" class="table table-bordered table-responsive-md table-striped text-center" width="90%">
                                            <thead>
                                                <tr>
                                                    <th> </th>
                                                    <th class="text-center">GL Reference No.</th>
                                                    <th class="text-center">Type</th>
                                                    <th class="text-center">SP Name</th>
                                                    <th class="text-center">Service Type</th>
                                                    <th class="text-center">Valid Form</th>
                                                    <th class="text-center">Valid Until</th>
                                                                                
                                                </tr>
                                            </thead>
                                            <tbody id="">
                                                <tr id= "">
                                                    <td><input type="checkbox" name="checkboxs" id="checkbox1" /></td>
                                                    <td>PRM/GL01/810723075383/201907</td>                      
                                                    <td>New</td>
                                                    <td>Home Nursing Providers Sdn Bhd</td>
                                                    <td>* Physiotherapy</td>
                                                    <td>#######</td>
                                                    <td>#######</td>
                                                </tr>
                                            </tbody>
                                            <tbody id="">
                                                <tr id= "">
                                                    <td><input type="checkbox" name="checkboxs" id="checkbox2" /></td>
                                                    <td>PRM/GL02/810723075383/201907(2)</td>                      
                                                    <td>Extension</td>
                                                    <td>Home Nursing Providers Sdn Bhd</td>
                                                    <td>* Physiotherapy</td>
                                                    <td>#######</td>
                                                    <td>#######</td>
                                                </tr>
                                            </tbody>
                                            <tbody id="">
                                                <tr id= "">
                                                    <td><input type="checkbox" name="radcheckboxsios" id="checkbox3" /></td>
                                                    <td>PRM/GL03/810723075383/201907</td>                      
                                                    <td>New</td>
                                                    <td>Home Nursing Providers Sdn Bhd</td>
                                                    <td>* Physiotherapy</td>
                                                    <td>#######</td>
                                                    <td>#######</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                

                                        <div class="row p-l-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Update Attendance Method</label> 
                                                        <div class="row p-l-20">
                                                            <div class="custom-control custom-radio" >
                                                                <input type="radio" id="yes1" name="yes1" class="custom-control-input" required>
                                                                <label class="custom-control-label" for="yes1">Upload</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="no1" name="yes1" class="custom-control-input" required>
                                                                <label class="custom-control-label" for="no1">Key-in</label>
                                                            </div>
                                                        </div>
                                                        <!-- <button type="button" id=""> Upload Attendance </button> -->
                                                        <span class="choosefile"><input type="file" required>
                                                </div>
                                            </div>
                                        </div>









                                        

                                    <div id="table" class="table-editable">
                                        <span class="table-add float-right mb-3 mr-2">
                                            <a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a>
                                        </span>
                                        
                                            <table id="dtBasicExample1"  class="table table-bordered table-responsive-md table-striped text-center">
                                                <thead>
                                                    <tr>
                                                    
                                                    
                                                        <th  rowspan="2" style="text-align:center;vertical-align:middle;padding:1">No.  
                                                            <span style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"aria-hidden="true"></i></a></span>
                                                            <span style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"aria-hidden="true"></i></a></span>
                                                        </th>
                                                        <th rowspan="2"  style="text-align:center;vertical-align:middle;padding:1">Name
                                                            <span  style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"aria-hidden="true"></i></a></span>
                                                            <span  style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"aria-hidden="true"></i></a></span>
                                                        </th>
                                                        <th  rowspan="2" style="text-align:center;vertical-align:middle;padding:1">Treatment Date  
                                                            <span  style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"aria-hidden="true"></i></a></span>
                                                            <span  style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"aria-hidden="true"></i></a></span>
                                                        </th>
                                                        <th  rowspan="2" style="text-align:center;vertical-align:middle;padding:1">Module</th>
                                                        <th rowspan="2" style="text-align:center;vertical-align:middle;padding:1">Session  
                                                            <span  style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"aria-hidden="true"></i></a></span>
                                                            <span  style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"aria-hidden="true"></i></a></span>
                                                        </th>
                                                        <th rowspan="2"   style="text-align:center;vertical-align:middle;padding:1">Total (RM)  
                                                            <span  style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"aria-hidden="true"></i></a></span>
                                                            <span  style="float:right;><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"aria-hidden="true"></i></a></span>
                                                        </th>
                                                        <!-- <th class="text-center">Sort</th> -->
                                                        <th  colspan="4" class="text-center">Action</th>
                                                    
                                                    </tr>
                                                    <tr>
                                                    <th class="text-center"><input type="checkbox" name="Checkboxs" id="selectAll" />   Endorse</th>
                                                    <th class="text-center"><input type="checkbox" name="Checkboxs" id="CheckBox12" />   Reject</th>
                                                    <th class="text-center">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    <!-- This is our clonable table line -->
                                                    <tr>
                                                    
                                                        
                                                        <td class="pt-3-half" contenteditable="true">1</td>
                                                        <td class="pt-3-half" contenteditable="true">Zul</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select id="selectFilter">        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">2</td>
                                                        <td class="pt-3-half" contenteditable="true">160</td>
                                                        <!-- <td class="pt-3-half">
                                                        <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                        <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox1" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox2" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr>
                                                    
                                                        <td class="pt-3-half" contenteditable="true">2</td>
                                                        <td class="pt-3-half" contenteditable="true">Zul</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">1 </td>
                                                        <td class="pt-3-half" contenteditable="true">80</td>
                                                        <!-- <td class="pt-3-half">
                                                        <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                        <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox3" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox4" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr>
                                                        
                                                        <td class="pt-3-half" contenteditable="true">3 </td>
                                                        <td class="pt-3-half" contenteditable="true">Zul</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">1</td>
                                                        <td class="pt-3-half" contenteditable="true">80</td>
                                                        <!-- <td class="pt-3-half">
                                                        <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                        <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox5" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox6" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                        
                                                        <td class="pt-3-half" contenteditable="true">4</td>
                                                        <td class="pt-3-half" contenteditable="true">Zul</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">1</td>
                                                        <td class="pt-3-half" contenteditable="true">80</td>
                                                        <!-- <td class="pt-3-half">
                                                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox7" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox8" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                        
                                                        <td class="pt-3-half" contenteditable="true">5</td>
                                                        <td class="pt-3-half" contenteditable="true">Ahmad</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">1</td>
                                                        <td class="pt-3-half" contenteditable="true">80</td>
                                                        <!-- <td class="pt-3-half">
                                                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox9" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox10" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                        
                                                        <td class="pt-3-half" contenteditable="true">6</td>
                                                        <td class="pt-3-half" contenteditable="true">Ahmad</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">1</td>
                                                        <td class="pt-3-half" contenteditable="true">80</td>
                                                        <!-- <td class="pt-3-half">
                                                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox11" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox12" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                        
                                                        <td class="pt-3-half" contenteditable="true">7</td>
                                                        <td class="pt-3-half" contenteditable="true">Ahmad</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">1</td>
                                                        <td class="pt-3-half" contenteditable="true">80</td>
                                                        <!-- <td class="pt-3-half">
                                                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox13" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox14" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                    
                                                        <td class="pt-3-half" contenteditable="true">8</td>
                                                        <td class="pt-3-half" contenteditable="true">Ahmad</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">1</td>
                                                        <td class="pt-3-half" contenteditable="true">80</td>
                                                        <!-- <td class="pt-3-half">
                                                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox15" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox16" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>

                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                    
                                                        <td class="pt-3-half" contenteditable="true">9</td>
                                                        <td class="pt-3-half" contenteditable="true">Khairul</td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">1</td>
                                                        <td class="pt-3-half" contenteditable="true">80</td>
                                                        <!-- <td class="pt-3-half">
                                                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox15" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox16" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>

                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                    
                                                    <td class="pt-3-half" contenteditable="true">10</td>
                                                    <td class="pt-3-half" contenteditable="true">Khairul</td>
                                                    <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                    <td class="pt-3-half" contenteditable="true">
                                                                            <select>        
                                                                                    <option value="">Please Select</option>
                                                                                    <option value="">IFT</option>
                                                                                    <option value="">TENS</option>
                                                                                    <option value="">OT</option>
                                                                            </select>
                                                    </td>
                                                    <td class="pt-3-half" contenteditable="true">1</td>
                                                    <td class="pt-3-half" contenteditable="true">80</td>
                                                    <!-- <td class="pt-3-half">
                                                        <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                            aria-hidden="true"></i></a></span>
                                                        <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                            aria-hidden="true"></i></a></span>
                                                    </td> -->
                                                    <td><input type="checkbox" name="Checkboxs" id="CheckBox17" /></td>
                                                    <td><input type="checkbox" name="Checkboxs" id="CheckBox18" /></td>
                                                    <td>
                                                    <span class="table-remove"><button type="button"
                                                        class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                    </td>
                                                </tr>

                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                    
                                                    <td class="pt-3-half" contenteditable="true">11</td>
                                                    <td class="pt-3-half" contenteditable="true">Khairul</td>
                                                    <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                    <td class="pt-3-half" contenteditable="true">
                                                                            <select>        
                                                                                    <option value="">Please Select</option>
                                                                                    <option value="">IFT</option>
                                                                                    <option value="">TENS</option>
                                                                                    <option value="">OT</option>
                                                                            </select>
                                                    </td>
                                                    <td class="pt-3-half" contenteditable="true">1</td>
                                                    <td class="pt-3-half" contenteditable="true">80</td>
                                                    <!-- <td class="pt-3-half">
                                                        <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                            aria-hidden="true"></i></a></span>
                                                        <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                            aria-hidden="true"></i></a></span>
                                                    </td> -->
                                                    <td><input type="checkbox" name="Checkboxs" id="CheckBox19" /></td>
                                                    <td><input type="checkbox" name="Checkboxs" id="CheckBox20" /></td>
                                                    <td>
                                                    <span class="table-remove"><button type="button"
                                                        class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                    </td>
                                                </tr>

                                                    <!-- This is our clonable table line -->
                                                    <tr>    
                                                    
                                                    <td class="pt-3-half" contenteditable="true">12</td>
                                                    <td class="pt-3-half" contenteditable="true">Khairul</td>
                                                    <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                    <td class="pt-3-half" contenteditable="true">
                                                                            <select>        
                                                                                    <option value="">Please Select</option>
                                                                                    <option value="">IFT</option>
                                                                                    <option value="">TENS</option>
                                                                                    <option value="">OT</option>
                                                                            </select>
                                                    </td>
                                                    <td class="pt-3-half" contenteditable="true">1</td>
                                                    <td class="pt-3-half" contenteditable="true">80</td>
                                                    <!-- <td class="pt-3-half">
                                                        <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                            aria-hidden="true"></i></a></span>
                                                        <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                            aria-hidden="true"></i></a></span>
                                                    </td> -->
                                                    <td><input type="checkbox" name="Checkboxs" id="CheckBox21" /></td>
                                                    <td><input type="checkbox" name="Checkboxs" id="CheckBox22" /></td>
                                                    <td>
                                                    <span class="table-remove"><button type="button"
                                                        class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                    </td>
                                                </tr>


                                                
                                                

                                                

















                                                    
                                                    <!-- This is our clonable table line -->
                                                    <tr class="hide">
                                                    
                                                        <td class="pt-3-half" contenteditable="true">13</td>
                                                        <td class="pt-3-half" contenteditable="true"></td>
                                                        <td class="pt-3-half" contenteditable="true"><input type="date" name="date"></td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                                                <select>        
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="">IFT</option>
                                                                                        <option value="">TENS</option>
                                                                                        <option value="">OT</option>
                                                                                </select>
                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true"></td>
                                                        <td class="pt-3-half" contenteditable="true"></td>
                                                        <!-- <td class="pt-3-half">
                                                        <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                                                aria-hidden="true"></i></a></span>
                                                        <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                                                aria-hidden="true"></i></a></span>
                                                        </td> -->
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox17" /></td>
                                                        <td><input type="checkbox" name="Checkboxs" id="CheckBox18" /></td>
                                                        <td>
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                        <tr>
                                                        <td colspan="5"><b>Total (RM)</b></td>
                                                        <td>$180</td>
                                                        <td colspan="3"></td>
                                                        </tr>
                                                </tfoot>
                                            </table>

                                        </div>
                                        
                                    </div>
                                </div>


                            </div>

                            <div class="tab-pane p-20" id="history" role="tabpanel">

                                    <div class="card">
                                        <div class="card-body">

                                           
                                        <div class="row p-l-20">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Service Provider</label> 
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="">Home Nursing Providers Sdn Bhd</option>
                                                        <option value="">ABC Sdn Bhd</option>
                                                        <option value="">DEF Sdn Bhd</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Year</label> 
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Month</label> 
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label> 
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                        <h5 class="card-title">Insured Person Attendance Detail</h5>
                                            <div id="table" class="table-editable">
                                                    <table   class="table table-bordered table-responsive-md table-striped text-center">
                                                        <thead>
                                                            <tr>
                                                            
                                                            
                                                                <th class="text-center">No. </th>
                                                                <th  class="text-center">Name </th>
                                                                <th  class="text-center">Treatment Date  </th>
                                                                <th  class="text-center">Module</th>
                                                                <th  class="text-center">Session </th>
                                                                <th  class="text-center">Total (RM) </th>
                                                               
                                                            
                                                            </tr>
                                                            
                                                        </thead>
                                                        <tbody>
                                                        
                                                            <!-- This is our clonable table line -->
                                                            <tr>   
                                                                <td class="pt-3-half" contenteditable="true">1</td>
                                                                <td class="pt-3-half" contenteditable="true">Zul</td>
                                                                <td class="pt-3-half" contenteditable="true">3/2/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio</td>
                                                                <td class="pt-3-half" contenteditable="true">2</td>
                                                                <td class="pt-3-half" contenteditable="true">160</td>
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>
                                                            
                                                                <td class="pt-3-half" contenteditable="true">2</td>
                                                                <td class="pt-3-half" contenteditable="true">Zul</td>
                                                                <td class="pt-3-half" contenteditable="true">3/7/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio </td>
                                                                <td class="pt-3-half" contenteditable="true">1 </td>
                                                                <td class="pt-3-half" contenteditable="true">80</td>
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>
                                                                
                                                                <td class="pt-3-half" contenteditable="true">3 </td>
                                                                <td class="pt-3-half" contenteditable="true">Zul</td>
                                                                <td class="pt-3-half" contenteditable="true">3/8/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio </td>
                                                                <td class="pt-3-half" contenteditable="true">1</td>
                                                                <td class="pt-3-half" contenteditable="true">80</td>
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>    
                                                                <td class="pt-3-half" contenteditable="true">4</td>
                                                                <td class="pt-3-half" contenteditable="true">Zul</td>
                                                                <td class="pt-3-half" contenteditable="true">3/9/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio</td>
                                                                <td class="pt-3-half" contenteditable="true">1</td>
                                                                <td class="pt-3-half" contenteditable="true">80</td>
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>    
                                                                <td class="pt-3-half" contenteditable="true">5</td>
                                                                <td class="pt-3-half" contenteditable="true">Ahmad</td>
                                                                <td class="pt-3-half" contenteditable="true">3/2/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio</td>
                                                                <td class="pt-3-half" contenteditable="true">1</td>
                                                                <td class="pt-3-half" contenteditable="true">80</td>
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>    
                                                                
                                                                <td class="pt-3-half" contenteditable="true">6</td>
                                                                <td class="pt-3-half" contenteditable="true">Ahmad</td>
                                                                <td class="pt-3-half" contenteditable="true">3/7/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio </td>
                                                                <td class="pt-3-half" contenteditable="true">1</td>
                                                                <td class="pt-3-half" contenteditable="true">80</td>
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>    
                                                                
                                                                <td class="pt-3-half" contenteditable="true">7</td>
                                                                <td class="pt-3-half" contenteditable="true">Ahmad</td>
                                                                <td class="pt-3-half" contenteditable="true">3/8/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio</td>
                                                                <td class="pt-3-half" contenteditable="true">1</td>
                                                                <td class="pt-3-half" contenteditable="true">80</td>
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>    
                                                            
                                                                <td class="pt-3-half" contenteditable="true">8</td>
                                                                <td class="pt-3-half" contenteditable="true">Ahmad</td>
                                                                <td class="pt-3-half" contenteditable="true">3/9/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio</td>
                                                                <td class="pt-3-half" contenteditable="true">1</td>
                                                                <td class="pt-3-half" contenteditable="true">80</td>
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>    
                                                            
                                                                <td class="pt-3-half" contenteditable="true">9</td>
                                                                <td class="pt-3-half" contenteditable="true">Khairul</td>
                                                                <td class="pt-3-half" contenteditable="true">3/2/2019</td>
                                                                <td class="pt-3-half" contenteditable="true">Physio </td>
                                                                <td class="pt-3-half" contenteditable="true">1</td>
                                                                <td class="pt-3-half" contenteditable="true">80</td> 
                                                            </tr>

                                                            <!-- This is our clonable table line -->
                                                            <tr>    
                                                            
                                                            <td class="pt-3-half" contenteditable="true">10</td>
                                                            <td class="pt-3-half" contenteditable="true">Khairul</td>
                                                            <td class="pt-3-half" contenteditable="true">3/7/2019</td>
                                                            <td class="pt-3-half" contenteditable="true">Physio</td>
                                                            <td class="pt-3-half" contenteditable="true">1</td>
                                                            <td class="pt-3-half" contenteditable="true">80</td>
                                                        </tr>

                                                            <!-- This is our clonable table line -->
                                                        <tr>    
                                                            <td class="pt-3-half" contenteditable="true">11</td>
                                                            <td class="pt-3-half" contenteditable="true">Khairul</td>
                                                            <td class="pt-3-half" contenteditable="true">3/7/2019</td>
                                                            <td class="pt-3-half" contenteditable="true">Physio</td>
                                                            <td class="pt-3-half" contenteditable="true">1</td>
                                                            <td class="pt-3-half" contenteditable="true">80</td>
                                                        </tr>

                                                        <!-- This is our clonable table line -->
                                                        <tr>     
                                                            <td class="pt-3-half" contenteditable="true">12</td>
                                                            <td class="pt-3-half" contenteditable="true">Khairul</td>
                                                            <td class="pt-3-half" contenteditable="true">3/8/2019</td>
                                                            <td class="pt-3-half" contenteditable="true">Physio</td>
                                                            <td class="pt-3-half" contenteditable="true">1</td>
                                                            <td class="pt-3-half" contenteditable="true">80</td>   
                                                        </tr>

                                                         
                                                    </tbody>
                                                        <tfoot>
                                                                <tr>
                                                                <td colspan="5"><b>Total (RM)</b></td>
                                                                <td colspan="1">$180</td>
                                                               
                                                                </tr>
                                                        </tfoot>
                                                    </table>

                                                </div>
                                                
                                            </div>
                                
                                    </div>
                            </div> 
                </div>
            </div>




 




          



        </div>
    </div>
</div>















<!-- Editable table -->
<script type="text/javascript">

const $tableID = $('#table');
 const $BTN = $('#export-btn');
 const $EXPORT = $('#export');

 const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half">
    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
  </td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;

 $('.table-add').on('click', 'i', () => {

   const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

   if ($tableID.find('tbody tr').length === 0) {

     $('tbody').append(newTr);
   }

   $tableID.find('table').append($clone);
 });

 $tableID.on('click', '.table-remove', function () {

   $(this).parents('tr').detach();
 });

 $tableID.on('click', '.table-up', function () {

   const $row = $(this).parents('tr');

   if ($row.index() === 1) {
     return;
   }

   $row.prev().before($row.get(0));
 });

 $tableID.on('click', '.table-down', function () {

   const $row = $(this).parents('tr');
   $row.next().after($row.get(0));
 });

 // A few jQuery helpers for exporting only
 jQuery.fn.pop = [].pop;
 jQuery.fn.shift = [].shift;

 $BTN.on('click', () => {

   const $rows = $tableID.find('tr:not(:hidden)');
   const headers = [];
   const data = [];

   // Get the headers (add special header logic here)
   $($rows.shift()).find('th:not(:empty)').each(function () {

     headers.push($(this).text().toLowerCase());
   });

   // Turn all existing rows into a loopable array
   $rows.each(function () {
     const $td = $(this).find('td');
     const h = {};

     // Use the headers from earlier to name our hash keys
     headers.forEach((header, i) => {

       h[header] = $td.eq(i).text();
     });

     data.push(h);
   });

   // Output the result
   $EXPORT.text(JSON.stringify(data));
 });









$(document).ready(function () {
$('#dtBasicExample1').DataTable();
$('.dataTables_length').addClass('bs-select');
});








$("th input[type='checkbox']").on("change", function() {
  
   var cb = $(this),          //checkbox that was changed
       th = cb.parent(),      //get parent th
       col = th.index() + 7;  //get column index. note nth-child starts at 1, not zero
       if( col==7){
        $("tbody td:nth-child(" + col + ") input").prop("checked", this.checked);  //select the inputs and [un]check it  
       }
       else if( col==8){
        $("tbody td:nth-child(" + col + ") input").prop("checked", this.checked);  //select the inputs and [un]check it  
       }
  
});

</script>
                
                
                     
              



@endsection




