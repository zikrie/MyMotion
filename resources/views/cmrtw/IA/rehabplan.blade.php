




<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Initial Assessment Summary</h4>
                <form class="form">
                    {{-- @include('cmrtw.IA.rehabPlan.summaryOfInitioalRehab')   --}}
                </form>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            
                <div class="col-12">
                    <button  onclick="printFunction()" style="margin:5px;" type="button" class="btn btn-primary" >Print Initial Assessment Summary</button>
                </div>
           



            


            {{-- <div class="card-body">
                <h4 class="card-title">@lang('ia.title20')</h4>
                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                    <h4 class="mb-0">@lang('ia.title1')</h4>
                </div>
                <br/>
                <form class="form">
                    @include('cmrtw.IA.rehabPlan.insuredPersonDetails')  
                </form>
            </div> --}}

            <div class="card-body">
                <h4 class="card-title">@lang('ia.title20')</h4>
                    {{-- <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                        <h4 class="mb-0">@lang('ia.title21')</h4>
                    </div> --}}
                <br/>
                <form class="form">
                    @include('cmrtw.IA.rehabPlan.rehabPlanningDetails') 
                </form>
            </div>

            <div class="card-body">
                <h4 class="card-title">@lang('ia.title22')</h4>
                {{-- <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                    <h4 class="mb-0">@lang('ia.title23')</h4>
                </div> --}}
                
                <form class="form">
                    @include('cmrtw.IA.rehabPlan.insuredPersonApproval')  
                </form>
            </div>

            {{-- <div class="form-group row">
                <div class="col-12"> 
                    <button type="button" id="cetakRgksn" class="btn btn waves-effect waves-light btn-success "> Cetak Ringkasan Penilaian Awal Pemulihan </button>
                    <button type="button" id="cetakCdgn" class="btn btn waves-effect waves-light  btn-success">Cetak Cadangan Perancangan Pemulihan</button> 
                </div>
            </div> --}}

            
                <div class="col-12"> 
                    <button type="button" id="cetakRgksn" class="btn btn waves-effect waves-light btn-success  "> Save </button>
                    {{-- <button type="button" id="cetakCdgn" class="btn btn waves-effect waves-light  btn-success">Update</button>  --}}
                </div>        
           




        </div>
    </div>
</div>


<script>

function printFunction() 
{
  window.print();
}


</script> 