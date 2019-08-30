<?php

namespace App\Http\Controllers\rtw;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class offerconfirmationController extends Controller
{
    //mad
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
        $jsondecodeBenefit="";
        $this->getBenefit($jsondecodeBenefit);

     

          if ($jsondecodeBenefit && $jsondecodeBenefit!='')//ayu
        {
            $errorcode = $jsondecodeBenefit->{'errorcode'};
            // return $errorcode;
            if ($errorcode == 0)
            {
                // $message = $jsondecodeData->{'message'};
                $benefit = $jsondecodeBenefit->{'data'};
                // $uniquerefno = $data->uniquerefno;
                // $rtwcaserefno = $data->rtwcaserefno;
                // $schemerefno = $data->schemerefno;
                // $caserefno = $data->caserefno;
                // session(['uniquerefno' => $uniquerefno]);
                // session(['rtwcaserefno' => $rtwcaserefno]);
                // session(['schemerefno' => $schemerefno]);
                // session(['caserefno' => $caserefno]);

                // dd($data);
            }
            else
            {
                $benefit = null;
                // $message = null;
            }
            
        }

        // dd($jsondecodeBenefit);
       

        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
          // $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
          //       . 'where  n.doctype = d.doctype';

         // dd($workbasketrtw);
        
         return view ('homertw', ['workbasketrtw'=>$workbasketrtw,'idtype'=>$idtype, 'race' => $race, 'state' => $state, 'national' => $national]);
        

    }
}
