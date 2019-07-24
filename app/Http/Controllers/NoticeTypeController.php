<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NoticeTypeController extends Controller
{
    //
    
    public function index()
    {
        $operid = session('loginname');
        if ($operid == '')
        {
            return redirect('/login');
        }
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['idtype']);
        $noticetype =DB::select('Select refcode, descen from reftable where tablerefcode=?', ['casetype']);
        return view('noticetype', ['idtype'=>$idtype, 'noticetype'=>$noticetype]);
    }

    public function noticeType(Request $request)
    {

    	$idno = $request->idno;
        $noticetype = $request->notice_type;

        session(['idno' => $idno]);
        session(['accdrefno'=>'', 'caserefno'=>'']);
        session(['message'=>'']);
        session(['noticetype'=>$noticetype]);

        if ($noticetype == "01") //accident
            return redirect('/accdatetime');
        else if ($noticetype == "02") //od
            return view('noticeOd.index');
        else if ($noticetype == "03") //invalidity
            return view('noticeInvalidity.index');
        else if ($noticetype == "04") //death
            return view('noticeDeath.index');

        //irina comment out
    	/*
        $result = DB::selectOne('select idno from obprofile where idno=?' , [$idno]);
        if(is_null($result))
        {
                return view('/accidentdatetime');
        }
         return view('/accidentdatetime', ['idno'=>$result->idno]);
         */
	
    
    	

    }
    
    
}
