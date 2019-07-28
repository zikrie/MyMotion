<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class RtwController extends Controller
{
    public function index()
    {

    	$operid = session('loginname');
    	if ($operid =='')
    	{
    		return redirect('/login');
    	}

    	$idno = session('idno');
    	if ($idno =='')
    	{
    		return redirect('/homertw');
    	}


    	$jsondecodeData="";
        $this->getData($jsondecodeData); 
        
        // return $jsondecodeData;
        if ($jsondecodeData && $jsondecodeData!='')//ayu
        {
            $errorcode = $jsondecodeData->{'errorcode'};
            // return $errorcode;
            if ($errorcode == 0)
            {
                // $message = $jsondecodeData->{'message'};
                $data = $jsondecodeData->{'data'};
                $uniquerefno = $data->uniquerefno;
                $rtwcaserefno = $data->rtwcaserefno;
                $schemerefno = $data->schemerefno;
                $caserefno = $data->caserefno;
                $name = $data->name;
                $dob = $data->dob;
                $race =$data->race;
                $gender = $data->gender;
                $occupation = $data->occupation;
                $add1 = $data->add1;
                $add2 = $data->add2;
                $postcode = $data->postcode;
                $city = $data->city;
                $statecode = $data->statecode;
                $telno = $data->telno;
                $mobileno = $data->mobileno;
                $email = $data->email;
                $nationality = $data->nationality;
                $name = $data->name;
                $empcode = $data->empcode;
                $empname = $data->empname;
                $empadd1 = $data->empadd1;
                $empadd2 = $data->empadd2;
                $emppostcode = $data->emppostcode;
                $empcity = $data->empcity;
                $empstatecode = $data->empstatecode;
                $emptelno = $data->emptelno;
                $empfaxno = $data->empfaxno;
                $empemail = $data->empemail;
                session(['uniquerefno' => $uniquerefno]);
                session(['rtwcaserefno' => $rtwcaserefno]);
                session(['schemerefno' => $schemerefno]);
                session(['caserefno' => $caserefno]);
                session(['name' => $name]);
                session(['dob' => $dob]);
                session(['race' => $race]);
                session(['gender' => $gender]);
                session(['occupation' => $occupation]);
                session(['add1' => $add1]);
                session(['add2' => $add2]);
                session(['postcode' => $postcode]);
                session(['city' => $city]);
                session(['statecode' => $statecode]);
                session(['telno' => $telno]);
                session(['mobileno' => $mobileno]);
                session(['email' => $email]);
                session(['nationality' => $nationality]);
                session(['empcode' => $empcode]);
                session(['empname' => $empname]);
                session(['empadd1' => $empadd1]);
                session(['emppostcode' => $emppostcode]);
                session(['empcity' => $empcity]);
                session(['empstatecode' => $empstatecode]);
                session(['emptelno' => $emptelno]);
                session(['empfaxno' => $empfaxno]);
                session(['empemail' => $empemail]);



                // dd($data);
                // dd($rtwcaserefno);
            }
            else
            {
                $data = null;
                // $message = null;
            }
            
        }

        $docinfo = array();
        $this->getDoc($docinfo);
        // return $data;
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
          $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
                . 'where  n.doctype = d.doctype';
        $doclist = DB::select($sql);
        

        $loginrole=session('loginrole');
        if($loginrole == 'PKRTW')
        {
            // dd($data);
            return view ('PK.index', ['data'=>$data,'idtype'=>$idtype, 'doclist'=>$doclist,'docinfo'=>$docinfo, 'race' => $race, 'state' => $state, 'national' => $national]);
        }
        elseif($loginrole == 'CM')
        {
            return view ('cmrtw.index');
        }
    }

    public function getData(&$jsondecodeData)
    {
    	$idno = session('idno');
        $brcode = session('loginbranchcode');
        $operid = session('loginname');
        $idtype = session('idtype');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/rtw/reg?idno='.$idno.'&brcode='.$brcode.'&operid='.$operid;//rtw
                          
        // return $url;

        $ch = curl_init();
    
       curl_setopt($ch,CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_PROXY, '');
    
       curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
       curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);    

        curl_close($ch);
        // return $result;
        $jsondecodeData =json_decode($result);

        // return $jsondecodeData;

    }

    public function getDoc(&$docinfo)//&$newwages)
    {
        $idno = session ('idno'); // get session
        $uniquerefno = session('uniquerefno');
        $caserefno = session ('caserefno');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getdoc?uniquerefno='.$uniquerefno.'&caserefno='.$caserefno;//irina
        
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);

        $docinfo = json_decode ($result);
    
    }
    
}