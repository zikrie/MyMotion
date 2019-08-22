<!-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                            <div class="row p-t-20">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.first_attend_date')</label><br>
                                                <input type="text" id="first_attend_date" class="form-control" disabled >
                                                       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.last_attend_date')</label><br>
                                                    <input type="text" id="last_attend_date" class="form-control" disabled>
                                                </div>
                                        </div>
                                    
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        
        
        
            
        
         -->







         <!-- Editable table -->
<div class="card">
  <!-- <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Editable table</h3> -->
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i> </a></span>
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