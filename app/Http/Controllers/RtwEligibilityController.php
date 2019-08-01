<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RtwEligibilityController extends Controller
{
    
    public function index()
    {
        $operid = session('loginname');
        if ($operid == '')
        {
            return redirect('/login');
        }
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        
        return view('Rtw_eligibility', ['idtype'=>$idtype]);
    }

    public function rtweligibility(Request $req) //req for user to fill in the input ex ic and idtype
    {
        $idno = $req->idno;
        $idtype = $req->idtype;
        

        session(['idno'=>$idno, 'idtype'=>$idtype]); //session idno and idtype

        if($idno == '') // if idno do not fill by user
        {
            return redirect()->back()->with('messageid', 'Please fill in the identification number'); // message will be displayed
        }
        $jsondecodeData=""; //jsondecodeData equal to null
        $this->getData($jsondecodeData);
        // dd($jsondecodeData);

        // if($errorcode != 0)
        // {
        //     return redirect()->back()->with('message');
        // }

        if ($jsondecodeData && $jsondecodeData!='')//irina
        {
            $errorcode = $jsondecodeData->{'errorcode'};
            $message = $jsondecodeData->{'message'};
            // dd($message);
            if ($errorcode == 0)
            {
                // $message = $jsondecodeData->{'message'};
                $data = $jsondecodeData->{'data'};
                // dd($data);
                 $loginrole=session('loginrole');
                 if($loginrole== 'PKRTW')
                {

                     return redirect('/PK.index'); 
                }
                elseif($loginrole == 'CM')
                {
                    return redirect('/cmrtw.index');  
                }
                else
                {
                    return redirect()->back()->with('messageid',$message);
                }
            }
            else
            {
                // // $rtwdata = null;
                //  return redirect()->back()->with('messageid', 'Record not found');
                 return redirect()->back()->with('messageid',$message);
                
            }
            
        }



        $loginrole=session('loginrole');
        if($loginrole== 'PKRTW')
        {
            return redirect('/PK.index'); 
        }
        elseif($loginrole == 'CM')
        {
            return redirect('/cmrtw.index');  
        }
    }


    public function getData(&$jsondecodeData)
    {
        $idno = session('idno');
        $brcode = session('loginbranchcode');
        $operid = session('loginname');
        $idtype = session('idtype');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/rtw/reg?idno='.$idno.'&brcode='.$brcode.'&operid='.$operid;//rtw ayu

        $ch = curl_init();
    
       curl_setopt($ch,CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_PROXY, '');
    
       curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
       curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);   

        curl_close($ch); 

        $jsondecodeData =json_decode($result);
	
    
    	

    }
     function postEligibility(Request $req)
    {  
        $rtwcaserefno= $req->rtwcaserefno;
        $rtwrefno= $req->rtwrefno;
        $schemerefno= $req->schemerefno;
        $brcode= $req->brcode;
        $dateadd= $req->dateadd;
        $addby= $req->addby;
        $status= $req->status;
        $idno= $req->idno;

        // $brcode= $req->brcode;
        // $loginid= $req->loginid;
        
        $checkid=['rtwcaserefno'=>$rtwcaserefno,'rtwrefno'=>$rtwrefno,'schemerefno'=>$schemerefno,'brcode'=>$brcode,'dateadd'=>$dateadd,'addby'=>$addby,'status'=>$status,'idno'=>$idno];

        $jsondata = json_encode($checkid);


        $url = 'http://webservicebeams.com/api/registerrtw';
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/reg?idno='.$idno.'&brcode='.$brcode;//irina
        // http://202.171.33.49:2021/api/wsmotion/rtw/reg?idno=800920145348&brcode=&loginid=

        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        // return view('noticeAccident.index');
       // return redirect()->back;
            //close connection
        curl_close($ch);
        $jsondecode = json_decode($result);
        return view('PK.RegistrationRTW', ['jsondecode' => $jsondecode]);


   
    }


}
