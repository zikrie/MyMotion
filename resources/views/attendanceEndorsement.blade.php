@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')



<div class="card">
    <div class="card-body">
        <form class="form">
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

            <div class="card">
            <div class="card-body">
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
        </div>
    </div>

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
                            <button type="button" id=""> Upload Attendance </button>
                    </div>
                </div>
            </div>









            

        <div class="card">
        <div class="card-body">
            <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2">
                <a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a>
            </span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">Number</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Treatment Date</th>
                            <th class="text-center">Module</th>
                            <th class="text-center">Session</th>
                            <th class="text-center">Total (RM)</th>
                            <th class="text-center">Sort</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pt-3-half" contenteditable="true">1</td>
                            <td class="pt-3-half" contenteditable="true">Zul</td>
                            <td class="pt-3-half" contenteditable="true">30/07/2019</td>
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
                            <td class="pt-3-half">
                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                    aria-hidden="true"></i></a></span>
                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                    aria-hidden="true"></i></a></span>
                            </td>
                            <td>
                            <span class="table-remove"><button type="button"
                                class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                            </td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="true">2</td>
                            <td class="pt-3-half" contenteditable="true">Zul</td>
                            <td class="pt-3-half" contenteditable="true">08/07/2019</td>
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
                            <td class="pt-3-half">
                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                    aria-hidden="true"></i></a></span>
                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                    aria-hidden="true"></i></a></span>
                            </td>
                            <td>
                            <span class="table-remove"><button type="button"
                                class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                            </td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>    
                            <td class="pt-3-half" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">Zul</td>
                            <td class="pt-3-half" contenteditable="true">12/07/2019</td>
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
                            <td class="pt-3-half">
                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                    aria-hidden="true"></i></a></span>
                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                    aria-hidden="true"></i></a></span>
                            </td>
                            <td>
                            <span class="table-remove"><button type="button"
                                class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                            </td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>    
                            <td class="pt-3-half" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">Ahmad</td>
                            <td class="pt-3-half" contenteditable="true">22/07/2019</td>
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
                            <td class="pt-3-half">
                                <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                    aria-hidden="true"></i></a></span>
                                <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                    aria-hidden="true"></i></a></span>
                            </td>
                            <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                            </td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr class="hide">
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
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
                            <td class="pt-3-half">
                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                                    aria-hidden="true"></i></a></span>
                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                                    aria-hidden="true"></i></a></span>
                            </td>
                            <td>
                            <span class="table-remove"><button type="button"
                                class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            </div>
        </form>
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

</script>
                
                
                     
              



@endsection




