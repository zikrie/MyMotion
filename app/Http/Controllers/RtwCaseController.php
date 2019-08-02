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


class RtwCaseController extends Controller
{
    public function index(Request $req)
    {

        $operid = session('loginname');
        if ($operid =='')
        {
            return redirect('/login');
        }
        $rtwrefno = $req->query('rtwrefno');
        // dd($rtwrefno);
        $jsondecodeData="";
        $this->getDatartwOb($jsondecodeData, $rtwrefno); 

         // dd($jsondecodeData);
        
        $casertw = $jsondecodeData->{'data'};
        // dd($casertw);


        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
          $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
                . 'where  n.doctype = d.doctype';
         $doclist = DB::select('SELECT doccat, doctype, docdescbm, docdescen FROM doctype where doctype = ? OR doctype = ?', ['C16','C03']   ) ;
         $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
         //  $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');

         // dd($casertw);

        // dd($workbasketrtw);
        
      return view ('cmrtw.index', ['casertw'=>$casertw, 'race' => $race, 'state' => $state, 'national' => $national, 'idtype'=>$idtype, 'doclist' => $doclist ,'alldoclist' => $alldoclist]);
        

    }

    public function getDatartwOb(&$jsondecodeData, $rtwrefno)
    {
       
        // (Session::get('rtwrefno'));
        
        $brcode = session('loginbranchcode');
        $operid = session('loginname');
        // $caserefno = session('caserefno');



        
        // http://202.171.33.49:2021/api/wsmotion/rtw/getworkbasketrtw?loginname=MASTURA 
        // http://202.171.33.49:2021/api/wsmotion/rtw/insuredpersoninfo?rtwrefno=DMA310720190001&brcode=A31&loginid=irina
         // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/rtw/reg?idno='.$idno.'&brcode='.$brcode.'&operid='.$operid;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/rtw/insuredpersoninfo?rtwrefno='.$rtwrefno.'&brcode='.$brcode.'&loginname='.$operid;//rtw  
        // dd($url);                 

        $ch = curl_init();
    
       curl_setopt($ch,CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_PROXY, '');
    
       curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
       curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch); 

        curl_close($ch);
    
        $jsondecodeData =json_decode($result);

        // dd($jsondecodeData);
       

    }
}