<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RtwformregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('PK.index');
    }

    public function postConfirmationrtw(Request $req)
    {
     

            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $caserefno = session('caserefno');
            $uniquerefno = session('uniquerefno');
            $rtwcaserefno = session('rtwcaserefno');
            $schemerefno = session('schemerefno');
            $revisionrefno = session('revisionrefno');
            $medrefno = '';
            $msrefno = '';

            // session(['uniquerefno'=>$uniquerefno, 'rtwcaserefno'=>$rtwcaserefno, 'schemerefno'=>$schemerefno]);

            //    $operid = session('loginname');
            // $brcode = session('loginbranchcode');
            // $caserefno = '201907180001';
            // $uniquerefno = '2019060001';
            // $rtwcaserefno = 'R201906250009';
            // $schemerefno = 'A31NTILT0620190001';
            // $revisionrefno = '';
            // $medicalrefno = '';
            // $msrefno = '';


            $datatosend = ['operid' =>$operid, 'brcode' =>$brcode, 'caserefno' => $caserefno, 'uniquerefno' => $uniquerefno, 'rtwcaserefno' => $rtwcaserefno, 'schemerefno' => $schemerefno, 'revisionrefno' => $revisionrefno, 'medrefno' => $medrefno, 'msrefno' => $msrefno];

            // dd($datatosend);

            $jsondata = json_encode($datatosend);

            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/rtw/regconfirm';
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

            // dd($jsondecodereg);

            $errorcode = $jsondecode->{'errorcode'};

            if($errorcode == 0)
            {
                return redirect()->back()->with('messagebank','Save successful');
            }
            else
            {
                return redirect()->back()->with('messagebank','Save unsuccessful');
            }


        }
    }

