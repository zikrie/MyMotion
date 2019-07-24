<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Workbasket;
use App\Caseinfo;
use App\Reftable;
use DB;
use Cookie;
use Response;
use Mail;

class WorkbasketRTWController extends Controller
{
    public function index()
    {

        $operid = session('loginname');
        if ($operid =='')
        {
            return redirect('/login');
        }

        $jsondecodeData="";
        $this->getData($jsondecodeData); 
         

        $workbasketrtw = $jsondecodeData;
        // dd($workbasketrtw);
        
        // foreach($workbasketrtw as $wb)
        // $rtwrefno = $wb->rtwrefno;
        // session(['rtwrefno' => $rtwrefno]);

        // dd($rtwrefno);
       

        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
          // $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
          //       . 'where  n.doctype = d.doctype';

         // dd($workbasketrtw);
        
         return view ('homertw', ['workbasketrtw'=>$workbasketrtw,'idtype'=>$idtype, 'race' => $race, 'state' => $state, 'national' => $national]);
        

    }

    public function getData(&$jsondecodeData)
    {
       
        $loginname = session('loginname');


        // http://202.171.33.49:2021/api/wsmotion/rtw/getworkbasketrtw?loginname=MASTURA 

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/rtw/getworkbasketrtw?&loginname='.$loginname;//rtw                   

        $ch = curl_init();
    
       curl_setopt($ch,CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_PROXY, '');
    
       curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
       curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch); 

        curl_close($ch);
    
        $jsondecodeData =json_decode($result);
       

    }
}