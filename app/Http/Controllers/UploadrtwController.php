<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Storage;
use Response;

class UploadrtwController extends Controller
{


    // public function index()
    // {

    //       $operid = session('loginname');
        
    //     if ($operid == '')
    //     {
    //         return redirect('/login');
    //     }

    //     $sql_select = 'select * from doctype';
    //     $doclist_select = DB::select($sql_select);
        

    //     $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
    //             . 'where n.casetype=? and n.doctype = d.doctype';
    //     $doclist = DB::select($sql,['03']);
    //     // dd($doclist_select);
    //     return view('PK.supportingDoc',['doclist_select' => $doclist_select, 'doclist' => '$doclist']);
        
    // }
    public function viewstorage(Request $req)
    {
        $docname = $req->query('docname');
        $docpath = 'app/documents/'.$docname;
        $path = storage_path($docpath);
        // return Storage::disk('partitionI')->response($show_pdf);
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$docpath.'"'
        ]);
    }
    
    public function getdoc()
    {

         $sql_select = 'select * from doctype';
        $doclist_select = DB::select($sql_select);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,['01']);
        return view('PK.supportingDoc',['doclist_select' => $doclist_select, 'doclist' => $doclist]);
    }
    
    public function upload(Request $request){

      // for($i = 1;$i<=$array;$i++){
        //     $doctype = $request->doctype[$i];
        //     $docdescen = $request->docdescen[$i];

        //     $combine=$fe
        // }
        
        //return $request->all();

       
        $idno = session('idno');
        $uniquerefno = session('uniquerefno');
        $caserefno = session('caserefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $dataSet = array();
        
        $cnt = 0;
        $a = '';
        
        
        // $select_idtype=$request->select_idtype[4];
        // $doctype=substr($select_idtype,4);
        // $doccat=substr($select_idtype,0,3);
        // return $doccat;
      
        if ($request->pdf == null)
        {
            return redirect()->back()->withInput(['tab'=>'supportingdocument'])->with('messagedoc','No document to be uploaded');
        }
         // $doccount="1";
        // $doctype_select = $request->doccat;
         
        // $values_array= array_count_values($doctype_select);
        // return $values_array['C01|C'];
        // $values_array='C01|C'->$values_array;
        // return 
        foreach ($request->pdf as $index => $pdf)
        {      
            // $doctype = $request->doctype[$index];
            $date = date('Ymd');
            // $docall = $request->doccat[$index];
            // $coun_array= count(in_array($docall, $doctype_select));
            // $doccat=substr($docall,4);
            // $doctype=substr($docall,0,3);
      
            // if($values_array[$docall]==$doccount){
            //     $doccount="1";
            //     // return $values_array[$docall];
            // }
            // else{
            //     $doccount++;
            // }

            
            // if (in_array($docall, $doctype_select) && count(in_array($docall, $doctype_select))>$index){
            //     $doccount++;
            //     }
            //     else{
            //         $doccount="1";
            //     }
           $doctype = '1';
           $doccat = '2';
           $doccount = '3';
                $docname = $uniquerefno.'_'.$doctype.'_'.$date.'_'.$doccount.'.pdf';
                
                $dataSet[$cnt++] = [
                    'caserefno' => $caserefno,
                    'uniquerefno' =>$uniquerefno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>$doccount

                ];
            
            
          
            
             $pdf->storeAs('documents', $docname);
            
             
        }

        //najmi
        /*
        foreach ($request->pdf_selection as $pdf_selection)
        {
            
            $date = date('Ymd');
            $doctype_selection = $request->idtype;
            $doccat_selection=DB::select('Select doccat from doctype where docdescen=?', [$doctype_selection]);
            
            if ($doccat_selection == 'O')
            {
                $docname_selection = $idno.'_'.$doctype_selection.'_'.$date.'.pdf';
                $dataSet_selection[$cnt++] = [
                    'caserefno' => '',
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat_selection,
                    'doctype' => $doctype_selection,
                    'docname' => $docname_selection,
                    'doccount'=>2

                ];
            }
            else if ($doccat_selection == 'C')
            {
                $docname_selection = $caserefno.'_'.$doctype_selection.'_'.$date.'.pdf';
                $dataSet_selection[$cnt++] = [
                    'caserefno' => $caserefno,
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat_selection,
                    'doctype' => $doctype_selection,
                    'docname' => $docname_selection,
                    'doccount'=>2

                ];
            }
            
          
            
            $pdf_selection->storeAs('documents', $docname_selection);
        }*/
        
        $docrepo = ['operid'=>$operid, 'brcode'=>$brcode, 'docinfo'=>$dataSet];
        
        
        $jsondata = json_encode($docrepo);
        

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/upddoc';

        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        curl_close($ch);
        
        $jsondecode = json_decode($result);
        //return $result;
        
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'supportingdocument'])->with('messagedoc','Upload successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'supportingdocument'])->with('messagedoc','Upload unsuccessful');
        }
        
        /*foreach($request->doctype as $index => $doctype) {
       
                   
            $dataSet[] = [
                'caserefno' => $caserefno,
                'idno' =>$idno,
                'date' =>$date,
                'time' =>$time, 
                'doccat' =>'C',
                'doctype' => $doctype,
                'docname' => $request->docdescen[$index],
                'addby' =>$operid,
                
            ];
            
            //return $index;
            $docid = $caserefno.'_'.$doctype.'_'.$date.'.pdf';
            if ($request->pdf[$index] == null)
            {
                continue;
            }
            if ($request->pdf[$index] != null)
            {
                $request->pdf[$index]->storeAs('documents', $docid);
                //$storage=Storage::disk('local')->putFileAs('documents',$request->pdf[$index],$caserefno.'_'.$doctype.'_'.$date.'.pdf');
            }
            
            //$a = $a.'++'.$index.'++';
            
            //$cnt++;
            
        }*/
        
        //return $a;
        //DB::table('docrepository')->insert($dataSet);
        //DB::table('docrepository')->insert($dataSet_selection);

        //return redirect()->back();


        
         //return $dataSet;
    //    return json_decode($dataSet);
       
    
        
    
        // $this->validate($request, [
        //     'pdf_1' => 'file|mimes:pdf|max:350',
        //     'pdf_2' => 'file|mimes:pdf|max:350',
        //     'pdf_3' => 'file|mimes:pdf|max:350',
        //     'pdf_4' => 'file|mimes:pdf|max:350',
        //     'pdf_5' => 'file|mimes:pdf|max:350',
        //     'pdf_6' => 'file|mimes:pdf|max:350',
        //     'pdf_7' => 'file|mimes:pdf|max:350',
        //     'pdf_8' => 'file|mimes:pdf|max:350',
        //     'pdf_9' => 'file|mimes:pdf|max:350',
        //     'pdf_10' => 'file|mimes:pdf|max:350',
        //     'pdf_11' => 'file|mimes:pdf|max:350',
        //     'pdf_12' => 'file|mimes:pdf|max:350',
        //     'pdf_13' => 'file|mimes:pdf|max:350',
        //     'pdf_14' => 'file|mimes:pdf|max:350',
        //     'pdf_15' => 'file|mimes:pdf|max:350',
        //  ]);

        // if ($request->pdf_1 == null  ) {
          
        // }else{
           
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '1',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C01',
        //          'docname' => 'Medical Report (Reg. 57(1))',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_1,'981230435087_C01_'.$date.'.pdf');
        // }

        // if ($request->pdf_2 == null  ) {
          
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '2',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C02',
        //          'docname' => 'Original Police Report / Certified True Copy (certified by the the police station that issued it) for road accident [Regulation 71(1)]',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_2,'981230435087_C02_'.$date.'.pdf');
        // }

        // if ($request->pdf_3 == null  ) {
          
        // }else{

          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '3',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C03',
        //          'docname' => 'Form 34',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_3,'981230435087_C03_'.$date.'.pdf');
        // }

        // if ($request->pdf_4 == null  ) {
          
        // }else{
        
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '4',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C05',
        //          'docname' => 'Medical Certificate (Reg. 57(1))',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_4,'981230435087_C05_'.$date.'.pdf');
        // }

        // if ($request->pdf_5 == null  ) {
          
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '5',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C06',
        //          'docname' => 'Medical Report [Reg. 68A(1)]',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_5,'981230435087_C06_'.$date.'.pdf');
        // }
        // if ($request->pdf_6 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '6',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C07',
        //          'docname' => 'Medical Report [Reg. 46(ii)]',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_6,'981230435087_C07_'.$date.'.pdf');
        // }
        // if ($request->pdf_7 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '7',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C08',
        //          'docname' => 'Receipt for funeral expenses for claimant other than from  widow / widower,  parents or child / adopted child [Reg. 98(1)]',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_6,'981230435087_C08_'.$date.'.pdf');
        // }

        // if ($request->pdf_8 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '8',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C09',
        //          'docname' => 'Copy of Identification Widow/Widower',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_8,'981230435087_C09_'.$date.'.pdf');
        // }
        // if ($request->pdf_9 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '9',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C10',
        //          'docname' => 'Copy of childrens Birth Certificate  / and  identification',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_9,'981230435087_C10_'.$date.'.pdf');
        // }
        // if ($request->pdf_10 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '10',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C11',
        //          'docname' => 'Copy of parents identification',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_10,'981230435087_C11_'.$date.'.pdf');
        // }
        // if ($request->pdf_11 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '11',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C12',
        //          'docname' => 'Copy of siblings birth certificate / and identification',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_11,'981230435087_C12_'.$date.'.pdf');
        // }
        // if ($request->pdf_12 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '12',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C13',
        //          'docname' => 'Copy of parents death certificate',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_12,'981230435087_C13_'.$date.'.pdf');
        // }
        // if ($request->pdf_13 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '13',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C14',
        //          'docname' => 'Copy of grandparents identification',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_13,'981230435087_C14_'.$date.'.pdf');
        // }
        // if ($request->pdf_14 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '14',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C15',
        //          'docname' => 'PKS(F) 47',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_14,'981230435087_C15_'.$date.'.pdf');
        // }
        // if ($request->pdf_15 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '15',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C16',
        //          'docname' => 'Others',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_15,'981230435087_C16_'.$date.'.pdf');
        // }
        // return redirect()->back();
    }
}
