<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Storage;
use Response;

class UploadclaimController extends Controller
{
    public function viewstorage(Request $req)
    {
        $docname = $req->query('docname');
        $docpath = 'app/documents/'.$docname;
        $path = storage_path($docpath);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$docpath.'"'
        ]);
    }
    
    public function upload(Request $request)
    {

        $idno = session('idno');
        $caserefno = session('caserefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $dataSet = array();
        
        $cnt = 0;
        $a = '';
        $doccount="1";
            $doctype_select = $request->doccat;
             
            $values_array= array_count_values($doctype_select);
        
        foreach ($request->pdf as $index => $pdf)
        {
            
            $date = date('Ymd');
            $docall = $request->doccat[$index];
            // $coun_array= count(in_array($docall, $doctype_select));
            $doccat=substr($docall,4);
            $doctype=substr($docall,0,3);
      
            if($values_array[$docall]==$doccount){
                $doccount="1";
                // return $values_array[$docall];
            }
            else{
                $doccount++;
            }
            
            if ($doccat == 'O')
            {
                $docname = $idno.'_'.$doctype.'_'.$date.'.pdf';
                $dataSet[$cnt++] = [
                    'caserefno' => '',
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>1

                ];

               
            }
            else if ($doccat == 'C')
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'.pdf';
                $dataSet[$cnt++] = [
                    'caserefno' => $caserefno,
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>1

                ];
               
            }
            
          
            
            $pdf->storeAs('documents', $docname);
        }
        
        $docrepo = ['operid'=>$operid, 'brcode'=>$brcode, 'docinfo'=>$dataSet];
        
        
        $jsondata = json_encode($docrepo);
        //return $jsondata;

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
        // return $jsondecode;
        
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload unsuccessful');
        }
     
        
        //return $a;
        DB::table('docrepository')->insert($dataSet);

        return redirect()->back();


        
    }
}
