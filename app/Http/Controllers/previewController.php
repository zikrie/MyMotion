<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;


class previewController extends Controller
{
// public function preview() 
// 	{
//  // Your logic here
// 		$jsondecodeData="";
//         $this->getData($jsondecodeData); 

//         $data = $jsondecodeData->{'data'};
//         // dd($data);

//         // dd($data);
//         // $empcode = session('$empcode');
//         // dd($empcode);
//         $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
//         $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
//         $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
//         $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
//         $sql = 's   elect d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
//                 . 'where  n.doctype = d.doctype';
//         $doclist = DB::select($sql);
//         $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);
        
//  		return view('preview', ['data'=>$data,'idtype'=>$idtype, 'doclist'=>$doclist, 'race' => $race, 'state' => $state, 'national' => $national, 'emptype' =>$emptype]);
// 	}

// 	public function getData(&$jsondecodeData)
//     {
//     	$idno = session('idno');
//         $brcode = session('loginbranchcode');
//         $operid = session('loginname');
//         $idtype = session('idtype');

//         $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/rtw/reg?idno='.$idno.'&brcode='.$brcode.'&operid='.$operid;//rtw
                          
//         // return $url;

//         $ch = curl_init();
    
//        curl_setopt($ch,CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_PROXY, '');
    
//        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
//        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//         $result = curl_exec($ch);
//         // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);    

//         curl_close($ch);
//         // return $result;
//         $jsondecodeData =json_decode($result);

//         // return $jsondecodeData;

//     }


public function preview() {
    // Your logic here
    return view('preview');
   }

  
}






